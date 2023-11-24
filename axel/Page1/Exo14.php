<?php

while(true)
{
    $val1 = rand(1,100);
    $val2 = rand(1,100);
    $val3 = rand(1,100);

    if ($val1 % 2 == 0 && $val2 % 2 == 1 && $val3 % 2 == 1){
        echo "Séquence Nbr Pair, Impaire et Impaire : ".$val1."-".$val2."-".$val3.".";
        break;
    }


}