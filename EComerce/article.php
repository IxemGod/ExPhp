<?php include "header.php"; ?>
<section class="Visualisation">
    <?php
    // On stock l'id contenu dans l'url
    $id = htmlspecialchars($_GET['id']);

    // On test si il y a la variable ID dans l'url
    if (isset($_GET['id'])) {
        $id = htmlspecialchars($_GET['id']);

        // Si l'id est bien dans l'url, alors on va parcourir tout les articles 
        // existant dans la var $_SESSION['article'].
        foreach ($_SESSION['article'] as $value) {
            // Ici on test une par une si l'id de l'article correspond à celui contenu dans l'url.
            if ($value['id'] == $id) {
                // Si oui on va atribuer à la variable $data, toute les donnée de l'article.
                $data = $value;
            }
        }
    }
    
        // Lorsque le client clique sur ajouter au panier, On check si on a toute les données
        // Et si les donnée sont correcte
        if (isset($_POST['quantity']) and isset($_GET['id'])) {
            if (is_numeric($_POST['quantity']) == 1) {

                // On déclare la var Id ainsi que la var doublon.
                $id = htmlspecialchars($_GET['id']);
                $doublon = false;
                foreach ($_SESSION['panier'] as $idCommand => $ArticleFromPan) {
                    // On test si l'id de l'article est déjà dans une commande.
                    // Si oui, alors on ajoute tout simplement une quantité à la commande
                    // Déjà éxistant 
                    if ($ArticleFromPan['id'] == $id and $doublon == false) {
                        $NouveauQuanti = intval(htmlspecialchars($_POST['quantity']));
                        $SommeQuanti = $ArticleFromPan["quantity"] + $NouveauQuanti;
                        $_SESSION['panier'][$idCommand] = array("id" => $id, "quantity" => $SommeQuanti);

                        // On passe doublon a true pour dire que l'ajout à été prix en compte
                        $doublon = true;
                        header("Location:panier.php");
                    }
                }
                // Si est false, alors on l'ajoute la commande tout simplement
                if ($doublon == false) {
                    $_SESSION['panier'][rand(0, 200000)] = array("id" => $id, "quantity" => htmlspecialchars($_POST['quantity']));
                    header("Location:panier.php");
                }
            }
        }
    ?>

    <aside class="img">
        <img src="<?= $data["img"] ?>">
    </aside>

    <aside class="info">

        <h1><?= $data["ref"] ?> - <?= $data["name"] ?></h1>
        <span class="ref">(Code : <?= $data["ref"] ?>)</span>
        <span class="stock"><i class="fa-solid fa-check" style="color: #11ff00;"></i>EN STOCK</span>

        <div class="description">
            <p><?= $data["desc"] ?></p>
        </div>

        <img src="https://www.couteaux-center.com/Files/132354/Img/17/marque-Caterpillar-logo1.jpg" width="250px" height="90px">

        <p class="prix"><?= $data["prix"] ?>€</p>

        <form method="POST" action="article.php?id=<?=$id?>">
            <div class="groupe">
                <div class="quantité">
                    <input type="number" name="quantity" class="quantity" value="1">
                </div>

                <button class="addPan" type="submit" name="submit">ajouter au panier</button>
            </div>
        </form>

    </aside>

</section>
<?php include("footer.html"); ?>