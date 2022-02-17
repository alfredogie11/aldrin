<?php
session_start();
$_SESSION['category']="";
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopify</title>
    <link href="style.css" rel="stylesheet">
</head>
<body style="background: #d2dae3">

<div id="login-form">
   <img src="img/sample.jpg" width="150" height="120">
   <form action="loginBack.php" method="post">
       <input name="username" type="text" placeholder="username">
       <input name="password" type="password" placeholder="password">
       <button id="loginbtn" name="loginbtn" type="submit">Login</button>
   </form>
</div>
</body>
</html>