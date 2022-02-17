<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "shopify");
if (!$con){
    die ("connection error");
}

if ($_SERVER["REQUEST_METHOD"]=="POST")
{

    if(isset($_POST["username"])&&isset($_POST["password"])&&isset($_POST["loginbtn"])){
        $_SESSION['username'] = $username = $_POST["username"];
        $password = $_POST["password"];

        $sql="SELECT * FROM shopzada_login WHERE username='".$username."' AND password='".$password."' ";

        $result=mysqli_query($con,$sql);

        if($row=mysqli_fetch_assoc($result)){
            if($row["username"]=="admin")
            {
                $_SESSION["username"]=$username;
                header("location:admin.php");
            }
            else if(mysqli_num_rows($result)>0){
                header("location:store.php");
            }

        }
        else{
            header("location:index.php");
        }
    }

}
