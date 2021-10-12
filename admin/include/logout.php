<?php
session_start();
unset($_SESSION['adminloggedin']);
unset($_SESSION['last_ative_time']);
header("location:../login.php");
?>