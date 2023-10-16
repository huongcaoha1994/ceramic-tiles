<?php 
$servername = "localhost:3307" ;
$username = "root" ;
$password = "12345678" ;
$dbname = "project_mytiles" ;
$connect = new mysqli($servername,$username,$password,$dbname) ;
if(!$connect){
    $message_error = "Kết nối database thất bại !" ;
    echo "<script> alert ('$message_error')</script>" ;
}
?>