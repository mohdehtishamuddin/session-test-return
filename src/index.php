<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
   <h1>WELCOME!</h1> 
   <form action="login.php" method="$_POST">
       <input type="hidden" name="logout" value="1">
       <input type="submit" value="logout">
   </form>
</body>
</html>
<?php

//Logout//
if(isset($_POST['logout'])){
    unset($_SESSION['user']);
}

//Back to login page if not signed in//
if(!isset($_SESSION['user'])){

    header('Location:login.php');
  die;
    // echo"<script>window.location.href='login.php';</script>";
    // exit();
}
?>