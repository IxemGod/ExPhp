<?php
$NbrATrouver = 813;
$essai = 0;
while(true){
    $nbr = rand(100,999);
    if ($nbr == $NbrATrouver)
    {
        break;
    }
    else{
        $essai++;
    }
}

echo "<h1>Nombre d'essai : ".$essai."</h1>";


$essai = 0;
for (; ; ) {
    $nbr = rand(100,999);
    if ($nbr == $NbrATrouver)
    {
        break;
    }
    else{
        $essai++;
    }
}
echo "<h1>Nombre d'essai : ".$essai."</h1>";