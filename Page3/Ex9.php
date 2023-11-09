<?php
$content = "";
for ($i = 0; $i < 100; $i++) {
    if ($i <= 9) {
        $content.= "0".$i.",";
    } else{
        $content.= $i.",";
    }
}

echo $content;