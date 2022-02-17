<?php
$con = mysqli_connect("localhost", "root","", "shopify");

    $name=$_POST['name'];
    $category=$_POST['category'];
    $stock=$_POST['stock'];
    $price=$_POST['price'];
    $img = $_FILES["img"]["name"];
    $tmp_img = $_FILES["img"]["tmp_name"];

    $path = "img/$img";
    move_uploaded_file($tmp_img,$path);

mysqli_query($con,"INSERT INTO items (name,category,stock,price,img) VALUES 
('$name','$category',$stock,$price,'$path')
");
//echo header("location:admin.php");
echo "<script>window.location.href='admin.php'</script>"
?>