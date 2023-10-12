<?php
session_start();
// unset($_SESSION['cart']);
if (empty(($_SESSION['user_id']))) {
    header('Location: ./login.php?error=You have to login');
    exit();
}
$product_id = $_GET['product_id'];
include ("database.php");
if (isset($_POST['add_to_cart'])) {
    $user_id = $_SESSION['user_id'];
    if(isset($_POST['quantity'])) {
        $quantity = $_POST['quantity'];
    } else {
        $quantity = 0;
    }    


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

    header("location: ../../view/shop.php?add_success=Add to cart successfully");    
}


?>