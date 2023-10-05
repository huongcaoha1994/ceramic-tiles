<?php 
session_start();
$id = $_GET['product_id'];
$type = $_GET['type'];

if ($type === 'desc') {
    if ($_SESSION['cart'][$id] > 1) {
        $_SESSION['cart'][$id]--;
    } else  {
        unset($_SESSION['cart'][$id]);
    }
}

if ($type === 'asc') {
    $_SESSION['cart'][$id]++;
}

header('Location: views_cart.php');
?>