<?php
$number = array();
for($i=0;$i<= 10; $i++){
        array_push($number, rand(1,999));
}

var_dump($number);
$min = 999;
$max = 0;
foreach ($number as $value) {
    if($value >= $max)
    {
        $max = $value;
    }

    if($value <= $min){
        $min = $value;
    }
}

echo "<p>La valeur la plus petite du tableau est : ".$min."</p>";
echo "<p>La valeur la plus grande du tableau est : ".$max."</p>";