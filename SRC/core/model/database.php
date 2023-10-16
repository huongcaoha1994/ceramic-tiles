<?php 
$servername = "localhost" ;
$username = "root" ;
$password = "khongcopass123" ;
$dbname = "project_mytiles" ;
$connect = new mysqli($servername,$username,$password,$dbname) ;
if(!$connect){
    $message_error = "Kết nối database thất bại !" ;
    echo "<script> alert ('$message_error')</script>" ;
}
?>