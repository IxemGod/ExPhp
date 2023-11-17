<?php include "header.php"?>

<link type="text/css" rel="stylesheet" href="css/style.css">
<script src="https://kit.fontawesome.com/fcb8c34dd8.js" crossorigin="anonymous"></script>
<body>
   <section>
    <h2>BOUTIQUE Coutellerie en Ligne</h2>

    <div class="marque">
        <p>Couteaux CATERPILLAR</p>
    </div>

    <div class="list-item">
    <?php
    // ID, Nom Ref, description, prix, img
    foreach ($_SESSION['article'] as $data) {?>
        <div class="produit">
            <span><?=$data["ref"]?> - <?=$data["name"]?> <i class="fa-regular fa-heart"></i></span>
            <img src="<?=$data["img"]?>">
            <p class="prix"><?=$data["prix"]?>€</p>
            <div class="DP">
                <a class="detail" href="article.php?id=<?=$data["id"]?>">Détails</a>
                <a class="panier" href="panierAdd.php?id=<?=$data['id']?>&q=1">Ajouter au Panier</a>
            </div>

            <p class="stock"><i class="fa-solid fa-check" style="color: #11ff00;"></i> EN STOCK</p>
        </div>
        <?php
        }
        ?>



        
<!--
        <div class="produit">
            <span>CAT91C80CP - Couteau CATERPILLAR <i class="fa-regular fa-heart"></i></span>
            <img src="https://www.couteaux-center.com/Files/132354/Img/08/cat80cp-z.jpg">
            <p class="prix">18.20€</p>
            <div class="DP">
                <button class="detail">Détails</button>
                <button class="panier">Ajouter au Panier</button>
            </div>

            <p class="stock"><i class="fa-solid fa-check" style="color: #11ff00;"></i> EN STOCK</p>
        </div>

        <div class="produit">
            <span>CAT91CAG46CP - Couteau CATERPILLAR
                <i class="fa-regular fa-heart"></i></span>
            <img src="https://www.couteaux-center.com/Files/132354/Img/18/cat46-z.jpg">
            <p class="prix">18.95€</p>
            <div class="DP">
                <button class="detail">Détails</button>
                <button class="panier">Ajouter au Panier</button>
            </div>

            <p class="stock"><i class="fa-solid fa-check" style="color: #11ff00;"></i> EN STOCK</p>
        </div>

        <div class="produit">
            <span>CAT91C176 - Couteau CATERPILLAR Air Frame <i class="fa-regular fa-heart"></i></span>
            <img src="https://www.couteaux-center.com/Files/132354/Img/19/cat176-z.jpg">
            <p class="prix">48.90€</p>
            <div class="DP">
                <button class="detail">Détails</button>
                <button class="panier">Ajouter au Panier</button>
            </div>

            <p class="stock"><i class="fa-solid fa-check" style="color: #11ff00;"></i> EN STOCK</p>
        </div>

        <div class="produit">
            <span>CAT91C176 - Couteau CATERPILLAR Air Frame <i class="fa-regular fa-heart"></i></span>
            <img src="https://www.couteaux-center.com/Files/132354/Img/19/cat176-z.jpg">
            <p class="prix">48.90€</p>
            <div class="DP">
                <button class="detail">Détails</button>
                <button class="panier">Ajouter au Panier</button>
            </div>

            <p class="stock"><i class="fa-solid fa-check" style="color: #11ff00;"></i> EN STOCK</p>
        </div>
    </div> -->
    </section>
</body>

<?php include("footer.html");?>
</html>