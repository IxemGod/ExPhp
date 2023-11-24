<?php
session_start();

$ItemList = array(
    // ID, Nom, Ref, description, prix, img
    array(
        "id" => 0,
        "name" => "Couteau CATERPILLAR Air",
        "ref" => "CAT91C176",
        "desc" => "Lame 8,4 cm en acier Inox finition noire <br> Fermeture Linerlock<br>Manche caoutchouc gris/noir<br>Longueur fermé: 11,5 cm<br>Longueur ouvert: 19,5 cm<br>Clip ceinture",
        "prix" => 48.95,
        "img" => "https://www.couteaux-center.com/Files/132354/Img/19/cat176-z.jpg"
    ),

    array(
        "id" => 1,
        "name" => "Couteau CATERPILLAR",
        "ref" => "CAT91C80CP",
        "desc" => "Lame 8 cm acier Inox, manche noir avec logo, ouverture une main, clip ceinture amovible.<br>Longueur fermé 10,5 cm, longueur ouvert 18,5 cm",
        "prix" => 18.25,
        "img" => "https://www.couteaux-center.com/Files/132354/Img/08/cat80cp-z.jpg"
    ),

    array(
        "id" => 2,
        "name" => "Couteau CATERPILLAR",
        "ref" => "CAT91CAG46CP",
        "desc" => "Lame 8,5 cm acier Inox avec logo, manche Aluminium anodisé gris avec logo, ouverture une main, clip ceinture amovible.<br>Longueur fermé 11 cm, longueur ouvert 18,5 cm",
        "prix" => 18.95,
        "img" => "https://www.couteaux-center.com/Files/132354/Img/18/cat46-z.jpg"
    ),

    array(
        "id" => 3,
        "name" => "Couteau CATERPILLAR Linerlock",
        "ref" => "CAT980002",
        "desc" => "Lame de 7,9 cm en acier Inox 8Cr13MoV<br>Fermeture Linerlock<br>Manche G10<br>Longueur fermé: 11,4 cm<br>Longueur ouvert: 19,3 cm<br>Clip ceinture<br>Poids 120g",
        "prix" => 22.95,
        "img" => "https://www.couteaux-center.com/Files/132354/Img/01/cat980002-z.jpg"
    ),

    array(
        "id" => 4,
        "name" => "Couteau CATERPILLAR Framelock",
        "ref" => "CAT980010",
        "desc" => "Lame de 5,8 cm en acier Inox 5Cr15MoV<br>Fermeture Framelock<br>Manche G10<br>Longueur fermé: 7,3 cm<br>Longueur ouvert: 12,7 cm<br>Clip ceinture",
        "prix" => 14.95,
        "img" => "https://www.couteaux-center.com/Files/132354/Img/12/cat980010-z.jpg"
    ),

    array(
        "id" => 5,
        "name" => "Couteau CATERPILLAR Linerlock",
        "ref" => "CAT980012",
        "desc" => "Lame de 8,2 cm en acier Inox 7Cr17MoV<br>Fermeture Linerlock<br>Manche G10 avec coupe ceinture et pic brise vitre en bout<br>Longueur fermé: 12 cm<br>Longueur ouvert: 20,3 cm<br>Clip ceinture<br>Poids 141g",
        "prix" => 25.95,
        "img" => "https://www.couteaux-center.com/Files/132354/Img/07/cat980012-z.jpg"
    ),

    array(
        "id" => 6,
        "name" => "Couteau CATERPILLAR",
        "ref" => "CAT980047",
        "desc" => "Lame tanto  7,8 cm en acier Inox 7Cr17MoV<br>Fermeture Linerlock<br>Manche aluminium noir/jaune<br>Longueur fermé: 10,5 cm<br>Longueur ouvert: 18 cm<br>Clip ceinture",
        "prix" => 15.94,
        "img" => "https://www.couteaux-center.com/Files/132354/Img/16/cat980047-z.jpg"
    ),

    array(
        "id" => 7,
        "name" => "Outil Multifonctions CATERPILLAR",
        "ref" => "CAT980048",
        "desc" => "Outil 13 fonctions<br>Longueur ouvert : 16,2 cm<br>Longueur fermé : 10,4 cm<br>Poids: 280g<br>Livré avec étui nylon",
        "prix" => 26.95,
        "img" => "https://www.couteaux-center.com/Files/132354/Img/13/cat980048-z.jpg"
    ),
    
    array(
        "id" => 8,
        "name" => "Couteau BLACKHAWK Hornet II",
        "ref" => "BB10025 ",
        "desc" => "Lame de 8,6 cm en acier AUS8A avec traitement de surface PVD noir<br>Manche en G10<br>Fermeture LinerLock<br>Clip ceinture amovible<br>Longueur ouvert: 18,3 cm<br>Longueur fermé: 10,3 cm",
        "prix" => 109.95,
        "img" => "https://www.couteaux-center.com/Files/132354/Img/18/bb10025-z.jpg"
    ),
    
    array(
        "id" => 9,
        "name" => "Couteau BLACKHAWK Point Man",
        "ref" => "15PM01BK",
        "desc" => "Lame de 8,6 cm en acier AUS8A avec traitement de surface PVD noir<br>Manche en G10<br>Fermeture LinerLock<br>Clip ceinture amovible<br>Longueur ouvert: 19,8 cm<br>Longueur fermé: 11,2 cm",
        "prix" => 109.95,
        "img" => "https://www.couteaux-center.com/Files/132354/Img/03/15pm01bkk-z.jpg"
    ),
    
    array(
        "id" => 10,
        "name" => "Couteau BENCHMADE Auto Immunity Woodland Green",
        "ref" => "BEN2900BK-2",
        "desc" => "Lame de 6,32 cm en acier CPM-M4 Super Steel ( 62-64 HRC )<br>Lame reverse tanto finition Cerakote Cobalt<br>Epaisseur de lame 2,29 mm<br>Plaquettes en Aluminium 6061-T6 anodisé vert<br>Ouverture automatique<br>Mécanisme Auto Axis Lock avec sécurité intégrée<br>Clip ceinture finition oxyde noir et cordon<br>Longueur totale 15,09 cm<br>Poids 69 gr<br>Fabriqué aux USA<br><br>Le BENCHMADE Immunity place la barre haute en matière de durabilité et de performances, ce qui en fait un EDC indispensable au quotidien.",
        "prix" => 296.35,
        "img" => "https://www.couteaux-center.com/Files/132354/Img/13/BN2900BK-2-1-z-big.jpg"
    ),
    array(
        "id" => 11,
        "name" => "Couteau BENCHMADE Auto Immunity Burnt bronze",
        "ref" => "BEN2900BK-1",
        "desc" => "Lame de 6,32 cm en acier CPM-M4 Super Steel ( 62-64 HRC )<br>Lame reverse tanto finition Cerakote Cobalt<br>Epaisseur de lame 2,29 mm<br>Plaquettes en Aluminium 6061-T6 anodisé vert<br>Ouverture automatique<br>Mécanisme Auto Axis Lock avec sécurité intégrée<br>Clip ceinture finition oxyde noir et cordon<br>Longueur totale 15,09 cm<br>Poids 69 gr<br>Fabriqué aux USA<br><br>Le BENCHMADE Immunity place la barre haute en matière de durabilité et de performances, ce qui en fait un EDC indispensable au quotidien.",
        "prix" => 296.35,
        "img" => "https://www.couteaux-center.com/Files/132354/Img/10/BN2900BK-1-1-z-big.jpg"
    ),

);

$_SESSION['article'] = $ItemList;

$TotalPrice = 0;

foreach ($_SESSION['panier'] as $idCommand => $ArticleFromPan) {

    foreach ($_SESSION['article'] as $data) {
        if ($data["id"] == $ArticleFromPan["id"]) {
            $TotalPrice = $TotalPrice + ($ArticleFromPan["quantity"] * $data["prix"]);
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Importation du logo de Couteau Center -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://www.couteaux-center.com/Files/132354/favicon.ico">

    <!-- Importation des fichiers css -->
    <link type="text/css" rel="stylesheet" href="css/header.css">
    <link type="text/css" rel="stylesheet" href="css/footer.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/article.css">
    <link type="text/css" rel="stylesheet" href="css/panier.css">


    <!-- Importation de Fontawesome -->
    <script src="https://kit.fontawesome.com/fcb8c34dd8.js" crossorigin="anonymous"></script>
    
    <title>Couteau Long</title>
</head>

<body>

    <header>
        <div class="top">
            <img src="https://www.couteaux-center.com/Files/132354/Img/07/FlagL0.png">
            <span>Site Français spécialiste en Coutellerie, Outdoor, Survie et Sécurité Défense depuis 2001</span>
        </div>

        <div class="LogoBandeauPanier">
            <div class="Logo">
                <a href="index.php"><img src="https://www.couteaux-center.com/Files/132354/Img/20/logo-couteaux-center-2021.png"></a>
            </div>
            <div class="Bandeau">
                <img src="https://m.media-amazon.com/images/I/61RyMECkTSL._AC_UF1000,1000_QL80_.jpg">
            </div>

            <div class="Panier">
                <a href="panier.php">
                    <i class="fa-solid fa-basket-shopping"></i>
                    <p>Panier : <b><?= $TotalPrice ?>€</b></p>
                </a>
            </div>
        </div>
    </header>