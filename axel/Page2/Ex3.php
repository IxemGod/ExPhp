<?php
// ------- Exercice 3
$heure = 14;

function hour($h){
    if($h >= 0 && $h <= 5){
        return '<br>Nous somme la nuit';
    }
    else if($h >= 6 && $h <= 12){
        return '<br>Nous somme le matin';
    }
    else if($h >= 13 && $h <= 18){
        return '<br>Nous somme l\'après midi';
    }
    else if($h >= 19 && $h <= 23){
        return '<br>Nous somme le soir';
    }
}

echo hour($heure);


?>