<?php
// ------- Exercice 4

$age = 22;

function test($a){
    if($a >= 18){
        return '<br> Vous êtes majeur';
    }
    else{
        return '<br>Vous êtes mineur';
    }
}

echo test($age);
?>