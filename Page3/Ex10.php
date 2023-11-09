<?php

$ceu = array( "Italie"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgique"=> "Bruxelles", "Danemark"=>"Copenhague",
"Finlande"=>"Helsinki", "France" => "Paris", "Slovaquie"=>"Bratislava", "Slovénie"=>"Ljubljana", "Germany" => "Berlin",
"Grèce" => "Athènes", "Ireland"=>"Dublin", "Pays Bas"=>"Amsterdam", "Portugal"=>"Lisbonne", "Spain"=>"Madrid",
"Suède"=>"Stockholm", "Royaume Unis"=>"London", "Chypre"=>"Nicosie", "Lituanie"=>"Vilnius", "République
Tchèque"=>"Prague", "Estonie"=>"Tallin", "Hongrie"=>"Budapest", "Lituanie"=>"Riga", "Malta"=>"Valette", "Autriche"
=> "Vienne", "Pologne"=>"Varsovie") ;

asort($ceu); 
foreach ($ceu as $pays => $capitale) {
    echo "<p>".$capitale." est la capitale de ".$pays."</p>";
    // Si je comprend bien la consigne, il faut afficher les capitales par ordre alphabétique ainsi que leur pays auquel elles appartiennes
}
