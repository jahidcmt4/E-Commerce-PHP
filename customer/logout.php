<?php 
session_start();
unset($_SESSION['session']);
session_destroy('session');
header("location:../login.php");
?>