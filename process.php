<?php
    session_start();

    $username=$_POST['username'];
    $password=$_POST['password'];

    if($username=='admin' && $password=='admin'){
        $_SESSION['session_username']=$username;
        header("location: admin/index.php");
    }
    else{
        header("location: login.php?failed");
    }

?>