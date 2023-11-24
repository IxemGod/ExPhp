<?php
$nbr = 7;


function test($nbr)
{
    $pair = ($nbr % 2);
    $Multiple3 = ($nbr % 3);
    $Multiple4 = ($nbr % 4);

    echo $pair;
    echo $Multiple3;
    echo $Multiple4;
    if($pair == 0 && $Multiple3 == 0){
        echo "<h1> C'est pair et multiple de 3 !</h1>";
    }
    if($pair == 0 && $Multiple4 == 0){
        echo "<h1> C'est pair et multiple de 4 !</h1>";
    }
    if($pair != 0 && $Multiple3 == 0){
        echo "<h1> C'est impair et multiple de 3 !</h1>";
    }
    if($pair != 0 && $Multiple4 == 0){
        echo "<h1> C'est impair et multiple de 4 !</h1>";
    }
    if($pair != 0 && $Multiple3 != 0 && $Multiple4 != 0){
        echo "<h1> C'est impair !</h1>";
    }
    if($pair == 0 && $Multiple3 != 0 && $Multiple4 != 0){
        echo "<h1> C'est pair !</h1>";
    }
}

test($nbr);