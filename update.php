<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
    <link href="style.css" rel="stylesheet">
</head>
<body style="background: #d2dae3">
<div id="uploadcont" style="flex-direction: column;margin-top: 120px">

    <h3>Update Item</h3>
    <form method="post" action="updateprocess.php" enctype="multipart/form-data">


        <?php
        session_start();

        $con = mysqli_connect("localhost", "root", "", "shopzada");
        if (!$con){
            die ("connection error");
        }


        $item_id =  $_SESSION['item_id'];
        $sql="SELECT * FROM items WHERE id = $item_id[0]";

        $result=mysqli_query($con,$sql);

        $cat="";$stock="";$price="";$name="";

        if($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
            if($row['category']=="Bag"){
                    echo "
                     <select name='category'>
                        <option selected>Bag</option>
                        <option>Perfume</option>
                    </select>
                    
                    ";
            }
           else{
                echo "
                     <select name='category'>
                        <option>Bag</option>
                        <option selected>Perfume</option>
                    </select>
                    
                    ";
            }


           $cat = $row["category"];
           $stock = $row['stock'];
           $price = $row['price'];
           $name= $row['name'];


        }

        ?>

        <input name="name" type="text" placeholder="item name" required value="<?php echo $name ?>" >
        <input  name="stock" type="number" placeholder="stock" required  value="<?php echo $stock ?>" >
        <input name="price" type="number" placeholder="price" required  value="<?php echo $price ?>" >
        <input name="img" type="file" required>

        <button id="submit" type="submit">Upload</button>
        <a href="admin.php" style="margin-top: 50px">
            <button id="backadmin" type="button" style="padding: 10px">Back</button>
        </a>
    </form>


</div>
</body>
</html>