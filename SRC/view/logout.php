<?php 
session_start() ;
unset($_SESSION['login']);
header("location: ../core/model/login.php");
exit;
?>