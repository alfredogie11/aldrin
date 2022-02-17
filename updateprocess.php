<?php
session_start();
$con = mysqli_connect("localhost", "root","", "shopify");

$name=$_POST['name'];
$category=$_POST['category'];
$stock=$_POST['stock'];
$price=$_POST['price'];
$img = $_FILES["img"]["name"];
$tmp_img = $_FILES["img"]["tmp_name"];

$id =  $_SESSION['item_id'][0] ;

$path = "img/$img";
move_uploaded_file($tmp_img,$path);

mysqli_query($con,"UPDATE items SET name = '$name', category = '$category', stock = $stock, price =  $price,
                 img = '$img' WHERE id = $id
");
//echo header("location:admin.php");
echo "<script>window.location.href='admin.php'</script>"
?>