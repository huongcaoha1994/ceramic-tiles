<?php 
session_start();
$id = $_GET['product_id'];
unset($_SESSION['cart'][$id]);
header('Location: views_cart.php');
?>