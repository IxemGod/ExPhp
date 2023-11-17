<?php
session_start();


    if(isset($_GET['q']) and isset($_GET['id'])){
        if(is_numeric($_GET['q']) + is_numeric($_GET['id']) == 2){
            $_SESSION['panier'][rand(0,200000)] = array("id" => $id, "quantity" => htmlspecialchars($_GET['q']));
        }
    }
header("Location:index.php");