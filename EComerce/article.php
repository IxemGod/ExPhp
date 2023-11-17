<?php include "header.php";?>
<link type="text/css" rel="stylesheet" href="css/article.css">
	<script src="https://kit.fontawesome.com/fcb8c34dd8.js" crossorigin="anonymous"></script>
<body>

<section>
    <?php

    if(isset($_GET['id'])){
        $id = htmlspecialchars($_GET['id']);
        foreach ($_SESSION['article'] as $value) {
            if($value['id'] == $id){
                $data = $value;
            }
        }
    }


    if(isset($_POST["submit"])){
        if(isset($_POST['quantity'])){
            if(is_numeric($_POST['quantity']) == 1){
                $_SESSION['panier'][rand(0,200000)] = array("id" => $id, "quantity" => htmlspecialchars($_POST['quantity']));
                // array_push($_SESSION["panier"],array(rand(0,20000) => array("id" => $id, "quantity" => htmlspecialchars($_POST['quantity']) )));
            }
        }
    }
    ?>



    <aside class="img">

        <img src="<?=$data["img"]?>">

    </aside>

    <aside class="info">

        <h1><?=$data["ref"]?> - <?=$data["name"]?></h1>
        <span class="ref">(Code : <?=$data["ref"]?>)</span>
        <span class="stock"><i class="fa-solid fa-check" style="color: #11ff00;"></i>EN STOCK</span>

        <div class="description">
            <p><?=$data["desc"]?></p>
        </div>

        <img src="https://www.couteaux-center.com/Files/132354/Img/17/marque-Caterpillar-logo1.jpg" width="250px" height="90px">

        <p class="prix"><?=$data["prix"]?>€</p>
        <form method="POST">
        <div class="groupe">
            <div class="quantité">
                <button class="minus">-</button><input type="number" name="quantity" class="quantity" value="1"><button class="more">+</button>
            </div>
        
                <button class="addPan" type="submit" name="submit">ajouter au panier</button>
            </div>
        </form>


    </aside>

</section>

</body>
<?php include("footer.html");?>