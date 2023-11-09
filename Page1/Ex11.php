<?php
$i=000;
while($i <= 999){
    if ($i <=999){
        $code = $i;
    }
    if($i <=99){
        $code = "0".$i;
    }
    if ($i <=9){
        $code = "00".$i;
    }
    echo "<p>Code postal : 44".$code;
    $i++;
}
?>