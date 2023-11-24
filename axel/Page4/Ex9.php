<?php
$tab=array(
    "Dupont"=>array("prenom"=>"Paul","ville"=>"Paris","age"=>27),
    "Schmoll"=>array("prenom"=>"Kirk","ville"=>"Berlin","age"=>35),
    "Smith"=>array("prenom"=>"Stan","ville"=>"Londres","age"=>45));

$element=  "";
foreach ($tab as $familyName => $data) {
    $element.="<p>Bonjour, je m'appel ".$data["prenom"].", j'ai ".$data["age"]." ans et j'habite à ".$data["ville"].".</p>";
}

echo $element;