<?php
session_start();
if($_POST["cat"]=="bag"){
    $_SESSION['category']="Bag";
}
else{
    $_SESSION['category']="Perfume";
}


header("location:store.php");