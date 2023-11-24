<?php
$content = "";
$a = array(
    "B" => "1520€",
    "T" => "1680€",
    "X" => "2150€"
);
$content = "<table><body>";
foreach ($a as $k => $v) {
    $content.= "<tr><th>Salaire de Mr ".$k."</th><th>".$v."</th></tr>";
}
echo $content;
?>

<style>
    table{
        border-collapse:collapse;
        border:1px solid black;
    }
    
    th{
        border:1px solid black;
        padding:10px;
    }
</style>