<?php

$elements = array( "H"=>"Hydrogène", "He"=>"Helium", "Li"=>"Lythium", "Be"=>"Beryllium", "B"=>"Bore",
"C"=>"Carbonne", "N"=>"Azote", "O"=>"Oxygène", "F"=>"Fluor", "Ne"=>"Néon");

$content = "<table><tr><th>Symbole</th><th>Elément</th></tr>";
foreach ($elements as $symb => $nom) {
    $content .= "<tr><th>".$symb."</th><th>".$nom."</th></tr>";
}

$content.= "</table>";

echo $content;
?>

<style>
    table{
        border:2px solid black;
        border-collapse: collapse;
    }

    th{
        border:1px solid black;
        padding:5px;
        text-align:left;
        width:100px;
    }
</style>