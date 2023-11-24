<?php include "header.php" ?>
<section class="produits">
    <h1>BOUTIQUE Coutellerie en Ligne</h1>

    <div class="marque">
        <p>Couteaux CATERPILLAR</p>
    </div>

    <div class="list-item">
        <?php

        // Permet de désactiver les notif et les warning de php
        ini_set('display_errors', 0);

        // ID, Nom Ref, description, prix, img
        // Ici on parcour la liste des article contenu dans $_SESSION['article'] et on les affiches de
        // de manière stucturé
        foreach ($_SESSION['article'] as $data) { ?>
            <div class="produit">
                <span><?= $data["ref"] ?> - <?= $data["name"] ?></span>
                <img src="<?= $data["img"] ?>">
                <p class="prix"><?= $data["prix"] ?>€</p>
                <div class="DP">
                    <a class="detail" href="article.php?id=<?= $data["id"] ?>">Détails</a>
                    <a class="panier" href="panierAdd.php?id=<?= $data['id'] ?>&quantity=1">Ajouter au Panier</a>
                </div>

                <p class="stock"><i class="fa-solid fa-check" style="color: #11ff00;"></i> EN STOCK</p>
            </div>
        <?php
        }
        ?>
</section>
<?php include("footer.html"); ?>
