<?php
session_start();
// unset($_SESSION['cart']);
if (empty(($_SESSION['user_id']))) {
    header('Location: ./login.php?error=You have to login');
    exit();
}
$product_id = $_GET['product_id'];

if (isset($_GET['from_main'])) {
    $from_main = $_GET['from_main'];
}

if (isset($_GET['from_shop'])) {
    $from_shop = $_GET['from_shop'];
}

if (isset($_GET['from_product_detail'])) {
    $from_product_detail = $_GET['from_product_detail'];
}

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
    if (isset($from_main)) {
        header("location: ../../view/main.php");
        exit();    
    } 

    if (isset($from_shop)) {
        header("location: ../../view/shop.php");
        exit();   

    }
    if (isset($from_product_detail)) {
        header("Location: ../../view/product-detail.php?product_id=" . $product_id);
        exit();    
    }
}


?>