<?php include("header.php");?>
<link type="text/css" rel="stylesheet" href="css/panier.css">
	<script src="https://kit.fontawesome.com/fcb8c34dd8.js" crossorigin="anonymous"></script>
<body>

<section>
    <h1> Votre Panier :</h1>

    <div class="articles">
        <table>
            <tr class="head"><th></th><th>Article</th><th>Quantité</th><th>Prix</th><th></th></tr>
            <?php
                    foreach ($_SESSION['panier'] as $idCommand => $ArticleFromPan) {
                        // Article From pan contient : id, quantity
                        // IdCommand contient l'id de la commande
         
                        // echo $ArticleFromPan;
                        foreach ($_SESSION['article'] as $data) {
                            if($data["id"] == $ArticleFromPan["id"])
                            {
                                echo "<tr><th> <img src='".$data["img"]."'></th>";
                                echo "<th> ".$data["ref"]." - ".$data["name"]."</th>";
                                echo "<th>".$ArticleFromPan["quantity"]."</th>";
                                echo "<th>".$ArticleFromPan["quantity"]*$data['prix']."€</th>";
                                echo "<th><a href='panierSupr.php?supr=".$idCommand."'><i class='fa-solid fa-square-xmark' style='color: #ff0000; padding:20px;'></i></a></th></tr>";
                            }
                    }
                }
            ?>

        </table>
    </div>

</section>
<?php include("footer.html");?>
