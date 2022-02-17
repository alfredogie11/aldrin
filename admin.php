<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link href="style.css" rel="stylesheet">
</head>
<body style="background: #d2dae3">

<a href="index.php">
    <button style="padding: 10px;margin:30px" >
        Logout
    </button>
</a>


   <?php
   session_start();

   $con = mysqli_connect("localhost", "root", "", "shopify");
   if (!$con){
       die ("connection error");
   }

   $sql="SELECT * FROM items ORDER BY category";

   $result=mysqli_query($con,$sql);
   ?>

<div  id="tablecont">
    <form method="post" action="adminBack.php">
        <table>
            <tr>
                <th>
                    Action
                </th>
                <th>
                    Name
                </th>
                <th>
                    Category
                </th>
                <th>
                    Stock
                </th>
                <th>
                    Price
                </th>
            </tr>


            <?php
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                echo "
                <tr style='border-bottom: 1px solid gray'>  
                <td><input style='width: 2rem;height: 2rem' type='checkbox' name='item_id[]' value='".$row['id']."'> </td>
                         <td>".$row['name']."</td>
                         <td>".$row['category']."</td>
                         <td>".$row['stock']."</td>
                         <td>$".$row['price']."</td>
                </tr>
                
                
                ";

            }
            ?>
        </table>



        <button type="submit" name="submit" value="upload">
                Upload
        </button>
        <button type="submit"  name="submit" value="update">
            Update
        </button>
        <button type="submit"  name="submit" value="delete">
            Delete
        </button>
    </form>
</div>




</body>
</html>