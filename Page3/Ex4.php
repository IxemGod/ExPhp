<?php
// Date du jours


// Date du jours JJ/MM/AAAA
echo date("d/m/y");
echo "<br>";

// Date du jours JJ-MM-AAAA
echo date("d-m-y");
echo "<br>";

// Date du jours JJ.MM.AAAA
echo date("d.m.y");
echo "<br>";


// Nombre de jours qui me sépare du 1 aout 2024

$Today = new DateTime();
$Burthday = new DateTime('2024-08-01');
$interval = $Today->diff($Burthday);
$joursRestants = $interval->format('%a');

echo "Nombre de jours restants jusqu'au 1er Aout 2024 : $joursRestants.";



?>