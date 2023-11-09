<?php
// ------- Exercice 4
$heure = 14;

if($heure >= 0 && $heure <= 5){
    echo '<br>Nous somme la nuit';
}
else if($heure >= 6 && $heure <= 12){
    echo '<br>Nous somme le matin';
}
else if($heure >= 13 && $heure <= 18){
    echo '<br>Nous somme l\'après midi';
}
else if($heure >= 19 && $heure <= 23){
    echo '<br>Nous somme le soir';
}
?>