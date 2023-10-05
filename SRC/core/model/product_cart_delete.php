<?php 
session_start();
$id = $_GET['product_id'];
unset($_SESSION['cart'][$id]);
header('Location: ../../view/views_cart.php');
?>