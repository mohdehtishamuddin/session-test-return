<?php
// session_start();
$users = ["admin" => "1234"];
    

if(isset($_POST['user']) && !isset($_SESSION['user'])){
    if($users[$_POST['user']]==$_POST['password']){
        $_SESSION['user']= $_POST['user'];
    }

    if(!isset($_SESSION['user'])){
        $failed = true;
    }
}


if(isset($_SESSION['user'])){
    header("Location:index.php");
    die;
    // exit();

    // echo "<script>window.location.href='index.php';</script>";
    // exit();
}


?>