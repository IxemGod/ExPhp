<?php
// ------- Exercice 6

$nombre = 9;

function multiple($nbr){

    if($nbr % 3 == 0 & $nbr % 5 == 0){
        return 'Le nombre '.$nbr." est un multiple de 3 et 5 !";
    }
    else{
        return 'Le nombre '.$nbr." n'est pas un multiple de 3 et 5 !";
    }

}

echo multiple($nombre);