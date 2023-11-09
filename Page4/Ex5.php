<?php
for($i = 1; $i<=100;$i++){
    $calc = strval(pow($i,1/2));
    if(strlen($calc) == 1){
        echo "<p>".$calc."</p>";
    }
}

/*
Mon programme de base était celui ci :

for($i = 1; $i<=100;$i++){
    $calc = pow($i,1/2);
    if(is_int($calc)){
        echo "<p>".$calc."</p>";
    }
}   

Mais comme il ne marchait pas j'ai fait autrement.*/