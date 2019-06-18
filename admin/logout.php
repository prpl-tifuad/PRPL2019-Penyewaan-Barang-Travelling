<?php
    session_start();

    $_SESSION['session_username']='';
    unset($_SESSION['session_username']);
    session_unset();
    session_destroy();
    header("location:../index.php");

?>