<?php

$piment_d_espellette = 0;

while($piment_d_espellette < 20){
    if($piment_d_espellette == 10){
        echo "<p><strong><u>".$piment_d_espellette."</u></strong></p>";
    }
    else{
        echo "<p>".$piment_d_espellette."</p>"; 
    }

    $piment_d_espellette = $piment_d_espellette + 2;
}