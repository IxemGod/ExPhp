<?php
// ------- Exercice 1
ini_set('display_errors',0);
$city = array(
    "1" => "Nantes",
    "2" => "Saint Nazaire",
    "3" => "Châteaubriant",
    "5" => "Guérande",
);

$content = "<table> <tbody> <tr class='head'><th>Clé</th><th>Valeur</th></tr>";
foreach ($city as $nbr => $v) {
    $content .="<tr><th>".$nbr."</th><th>".$v."</th></tr>";
}

$content.= "</tbody></table>";
echo $content;

?>
<style>
    table{
        border: 1px solid black;
        margin:0px;
    }
    table tr th{
        border:1px solid black;
        margin:0px;
    }