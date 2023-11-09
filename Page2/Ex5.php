<?php
// ------- Exercice 5
$choix = 2;

function test($c){

    switch ($c) {

        case 1:
            return "Insérer";
            break;
        case 2:
            return "Supprimer";
            break;
        case 3:
            return "Afficher";
            break;
        default:
            return "Ce choix n'existe pas";
            break;
        }

    }

echo test($choix);
?>