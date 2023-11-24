<?php include("header.php"); ?>
<section class="TablePanier">

<?php 
    // $NbrCommand sert à compter le nombre d'article contenu dans le panier
    $NbrCommand = 0;
    foreach ($_SESSION['panier'] as $idCommand => $ArticleFromPan) {
        $NbrCommand++;
    }

    if($NbrCommand > 0){
        ?>
        <h1> Votre Panier :</h1>

        <div class="articles">
            <table>
                <tr class="head">
                    <th></th>
                    <th>Article</th>
                    <th>Quantité</th>
                    <th>Prix</th>
                    <th></th>
                </tr>
            <?php
        }
        else{
            ?>
            <h1>Le panier est vide tah ton avenir</h1>
            <?php
           }

            // Fonction qui gère la modification de quantité depuis le panier
            for ($i = 0; $i <= 6; $i++) {
                if (isset($_POST[$i])) {
                    foreach ($_SESSION['panier'] as $idCommand => $ArticleFromPan) {
                        if ($ArticleFromPan['id'] == $i) {
                            $NewQuanti = htmlspecialchars($_POST[$i]);
                            if ($NewQuanti <= 0) {
                                $NewQuanti = 1;
                            }
                            $_SESSION['panier'][$idCommand] = array("id" => $i, "quantity" => $NewQuanti);
                        }
                    }
                }
            }

            
            
            // Fonction qui affiche le panier complet sous forme de <table> HTML
            foreach ($_SESSION['panier'] as $idCommand => $ArticleFromPan) {
                // Article From pan contient : id, quantity
                // IdCommand contient l'id de la commande

                foreach ($_SESSION['article'] as $data) {
                    if ($data["id"] == $ArticleFromPan["id"]) {
                    ?>
                        <tr>
                            <th> <img src='<?= $data["img"] ?>'></th>
                            <th><?= $data["ref"] ?> - <?= $data["name"] ?></th>
                            <th>
                                <form method='POST' action="panier.php"><input name='<?= $data['id'] ?>' type='number' value='<?= $ArticleFromPan["quantity"] ?>'> <button type='submit' name='submit'>Modifier</button></form>
                            </th>
                            <th><?=$ArticleFromPan["quantity"] * $data['prix']?>€</th>
                            <th><a href='panierSupr.php?supr=<?= $idCommand ?>'><i class='fa-solid fa-square-xmark' style='color: #ff0000; padding:20px;'></i></a></th>
                        </tr>
                    <?php
                    }
                   
                }
                
            }

            ?>

        </table>
    </div>

</section>
<?php include("footer.html"); ?>