<?php
session_start();

if(isset($_GET["supr"])){
    if(is_numeric($_GET['supr'])==1){
        unset($_SESSION['panier'][htmlspecialchars($_GET["supr"])]);
    }
}
header("Location:panier.php");