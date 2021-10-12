<?php 
session_start();
unset($_SESSION['last_ative_time']);
unset($_SESSION['userloggedin']);
unset($_SESSION['staffloggedin']);
session_destroy();

header("location:../login.php");
?>