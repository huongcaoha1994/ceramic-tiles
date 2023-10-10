<?php
session_start();
// unset($_SESSION['cart']);
$product_id = $_GET['product_id'];
include ("database.php");
if (isset($_POST['add_to_cart'])) {
    $user_id = $_SESSION['user_id'];    
    $quantity = $_POST['quantity'];

    if(empty($_SESSION['cart'])) {
        if ($quantity > 0) {
            $_SESSION['cart'][$product_id] = $quantity;

        } else {
            $_SESSION['cart'][$product_id] = 1;
        }
    } else {
        if (!empty($_SESSION['cart'][$product_id])) {
            if ($quantity > 0) {
                $_SESSION['cart'][$product_id] += $quantity;
            } else {
                $_SESSION['cart'][$product_id]++;
            }
        } else {
            if ($quantity > 0) {
                $_SESSION['cart'][$product_id] = $quantity;
            } else {
                $_SESSION['cart'][$product_id] = 1;
            }
        }
    }

    header("../../view/shop.php");    
}


?>