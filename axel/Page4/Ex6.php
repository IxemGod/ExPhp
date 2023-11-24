<!-- La fameuse suite de fibonacci -->

<?php
// On va prendre une première valeur qu'on va appeler initiale égale à 0
// Et une autre valeur égale à 1 qu'on va appeler $Val1.
$ValInitial = 0;
$Val1 = 1;

// Une troisième variable va indiquer la longeur de la suite.
// Cette variable est (tiens toi bien acrocher) variable !
$longeur = 13;

echo "<section>";

for($i = 0 ; $i <= $longeur; $i++){
    $calc = $ValInitial + $Val1; // Le calcul de base de cette suite est la somme des 2 termes qui précèdes.

    $content = "<div><p>Valeur 0 : ".$ValInitial."</p>";
    $content .= "<p>Valeur 1 : ".$Val1."</p>";

    // Une fois ce calcule fait, il faut échanger les variables avec la nouvelle valeur et celle de la valeur initial.
    $ValInitial = $Val1;
    $Val1 = $calc;


    // Bien sur on affiche tout ça :)
    $content .= "<p>Résultat : ".$calc."</p></div>";
    echo $content;

}

echo "</section>";
?>

<style>

    section{
        display: flex;
        flex-direction: row;
        flex-wrap : wrap;
    }
    div{
        margin:30px;
        border:2px solid black;
        width:100px;
    }
