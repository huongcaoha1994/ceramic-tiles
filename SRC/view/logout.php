<?php 
session_start() ;
session_destroy();
header("location: ../core/model/login.php");
exit;
?>