<?php 
session_start() ;
session_destroy();
header("location: ../model/login.php");
exit;
?>