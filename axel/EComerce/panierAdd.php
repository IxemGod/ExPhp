<?php
session_start();

// Cette fonction est utiliser lorsque que le client ajoute au panier un article depuis la liste
// des articles (sur la home)
// On test les vars ainsi que leur valabilité
if(isset($_GET['quantity']) and isset($_GET['id'])){
    if(is_numeric($_GET['quantity']) == 1 and is_numeric($_GET['id']) == 1){
        // On déclare la var $doublon dans le cas de l'ajout d'un double achat d'un seul article
        $doublon = false;

        // On parcour toute les commande du panier et on check si l'article en question se trouve déjà à l'intérieur
        foreach ($_SESSION['panier'] as $idCommand => $ArticleFromPan) {
            var_dump($ArticleFromPan);
            if($ArticleFromPan['id'] == htmlspecialchars($_GET['id']) and $doublon == false){
                // Si il est déjà à l'intérieur, alors on modifie juste la quantité
                $NouveauQuanti = intval(htmlspecialchars($_GET['quantity']));
                $SommeQuanti = $ArticleFromPan["quantity"] + $NouveauQuanti;
                $_SESSION['panier'][$idCommand] = array("id" => htmlspecialchars($_GET['id']), "quantity" => $SommeQuanti);
                $doublon = true;
                header("Location:panier.php");
            }
        }
        // Si $doublon est à false, c'est que l'article n'à pas déjà été ajouter au panier. Dans ce cas on l'ajoute.
        if($doublon == false){
        $_SESSION['panier'][rand(0,200000)] = array("id" => htmlspecialchars($_GET['id']), "quantity" => htmlspecialchars($_GET['quantity']));
        header("Location:panier.php");
    }
    }
}