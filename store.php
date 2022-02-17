<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopify Store</title>
    <link href="style.css" rel="stylesheet">
</head>
<body >
<nav id="store-header" style="background: #d2dae3">
   <div style="align-items: flex-end">
       <img src="img/sample.jpg" width="150" height="120" style="margin: 10px">
       <div style="display: flex;flex-direction: column;align-items: center">
           <p style="width: 100%;text-align: start;font-family: Arial;font-size: 1.8rem;font-style: italic">Welcome to Shopify</p>
           <p style="display: flex;align-items: flex-end;width: 100%;text-align:start;font-family: Arial;font-size: 1.2rem;margin: 0 0 10px 0 ;font-style: italic"><img style="margin-right: 0.3rem" src="img/people.png" width="30" height="30"> <?php session_start(); echo $_SESSION['username']?></p>
       </div>

   </div>
    <div style="justify-content: flex-end;align-items: flex-end">
        <a href="logout.php" style="margin: 1rem">
            <button id="logoutbtn">Logout</button>
        </a>

    </div>
</nav>

<div id="cat-group">
    <form action="setCategory.php" method="post">
        <button class="cat" name="cat" value="bag">Bag</button>  <button name="cat" class="cat" value="perfume">Perfume</button>
    </form>
</div>

<div id="store-cont">


    <?php
    $con = mysqli_connect("localhost", "root", "", "shopzada");
    if (!$con){
        die ("connection error");
    }

    $sql="";
    if($_SESSION['category']==""){
        $sql="SELECT * FROM items ORDER BY category";
    }
    else{
        $sql="SELECT * FROM items WHERE category = '".$_SESSION['category']."' ORDER BY category";
    }
    $result=mysqli_query($con,$sql);

    while($row=mysqli_fetch_assoc($result)){
        echo '
        
              <div>
                <img src="./'.$row['img'].'" width="200" height="200">
                <h2> '.$row['name'].'</h2>
                <h5>Category:<span> '.$row['category'].'</span></h5>
                <h5>Price:<span> '.$row['price'].'</span></h5>
                <h5>Stock:<span> '.$row['stock'].'</span></h5>
              </div>
        ';
    }
    ?>



</div>
</body>
</html>