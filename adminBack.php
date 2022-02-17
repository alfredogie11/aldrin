<?php
session_start();

$button = $_POST["submit"];

if($button=="upload"){
    header("location:upload.php");
}
else if($button=="update"){
    if(isset($_POST["item_id"])){
        $_SESSION['item_id'] = $_POST["item_id"];
        header("location:update.php");
    }
    else{
        header("location:admin.php");
    }
}
else if($button=="delete"){
    if(isset($_POST["item_id"])){
        $_SESSION['item_id'] = $_POST["item_id"];
        header("location:remove.php");
    }
    else{
        header("location:admin.php");
    }

}


