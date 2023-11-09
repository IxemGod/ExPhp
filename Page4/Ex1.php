<?php

function incrementation($pas){

    for($i = 0; $i <=100;$i = $i + $pas){
        echo $i.",";
    }

}

incrementation(12);

// Dans l'exercie, voici ce qui est marquer : Exemple : fonction(12) ->12,24,36,48,60,72,84,98
// Moi j'obtiens : 0,12,24,36,48,60,72,84,96
// 96 au lieu de 98. Les calcules ne sont pas bon kevin 
// C'est un moyens de trouver si on triche ou pas ?
