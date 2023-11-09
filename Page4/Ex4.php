<?php

$val1 = rand(0,9);
$NextVal = 10 - $val1;
$val2 = rand(0,$NextVal-1);
$val3 = 10 - ($val1 + $val2);

echo "<p>Val 1 :".$val1."</p>";
echo "<p>Val 2 :".$val2."</p>";
echo "<p>Val 3 :".$val3."</p>";

echo "<p>".$val1." + ".$val2." + ".$val3." = ".($val1+$val2+$val3)."</p>";

/* Il y avait un autre moyens, en gros on fait 
une boucle infini avec notre cher petite boucle for( ; ; ),
et on génère 3 nombres random et on stop la boucle quand la somme des trois atteinds 10.

Exemple : 

for(;;){
    $val1 = rand(0,9);
    $val2 = rand(0,9);
    $val3 = rand(0,9);
    if($val1 + $val2 + $val3 == 10)
    {
        echo "<p>".$val1." + ".$val2." + ".$val3." = ".($val1+$val2+$val3)."</p>";
        break;
    }
}

Ca marcherais mais bon j'imagine que tu voulais
que je me creuse la tête ducoup j'ai pas fait 
ça 🙃
*/