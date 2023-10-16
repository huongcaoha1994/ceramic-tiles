<?php
include("../model/database.php") ;

session_start();
// unset($_SESSION['cart']);
if (empty(($_SESSION['user_id']))) {
    header('Location: ./login.php');
    exit();
}
$product_id = $_GET['product_id'];
$inventory = 0 ;
$select_inventory = "select inventory from products where product_id = $product_id ;" ;
$result_inventory = $connect->query($select_inventory);
if($result_inventory->num_rows > 0 )  {
    $row = $result_inventory->fetch_assoc() ;
    $inventory = $row['inventory'] ;
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
        if($quantity > $inventory){
            echo "Insufficient inventory" ;
            header("location: ../../view/product-detail.php?product_id=$product_id");
            exit("Insufficient inventory");
        }
    } else {
        $quantity = 0;
    }    


    if(empty($_SESSION['cart'])) {
        if ($quantity > 0) {
            $total_quantity = $_SESSION['cart'][$product_id] + $quantity ;
            if($quantity > $inventory){
                echo "Insufficient inventory" ;
                header("location: ../../view/product-detail.php?product_id=$product_id");
                exit("Insufficient inventory");
            }
            $_SESSION['cart'][$product_id] = $quantity;
            

        } else {
            $total_quantity = $_SESSION['cart'][$product_id] + 1 ;
            if($quantity > $inventory){
                echo "Insufficient inventory" ;
                header("location: ../../view/product-detail.php?product_id=$product_id");
                exit("Insufficient inventory");
            }
            $_SESSION['cart'][$product_id] = 1;
        }
    } else {
        if (!empty($_SESSION['cart'][$product_id])) {
            if ($quantity > 0) {
                $total_quantity = $_SESSION['cart'][$product_id] + $quantity ;
                if($quantity > $inventory){
                    echo "Insufficient inventory" ;
                    header("location: ../../view/product-detail.php?product_id=$product_id");
                    exit("Insufficient inventory");
                }
                $_SESSION['cart'][$product_id] += $quantity;
            } else {
                $total_quantity = $_SESSION['cart'][$product_id] + 1 ;
                if($quantity > $inventory){
                    echo "Insufficient inventory" ;
                    header("location: ../../view/product-detail.php?product_id=$product_id");
                    exit("Insufficient inventory");
                }
                $_SESSION['cart'][$product_id]++;
            }
        } else {
            if ($quantity > 0) {
                if($quantity > $inventory){
                    echo "Insufficient inventory" ;
                    header("location: ../../view/product-detail.php?product_id=$product_id");
                    exit("Insufficient inventory");
                }
                $_SESSION['cart'][$product_id] = $quantity;
            } else {
                if($inventory < 1 ){
                    echo "Insufficient inventory" ;
                    header("location: ../../view/product-detail.php?product_id=$product_id");
                    exit("Insufficient inventory");
                }
                $_SESSION['cart'][$product_id] = 1;
            }
        }
    }

    if (isset($_GET['from_main'])) {
        header("location: ../../view/main.php");
        exit();    
    } 

    if (isset($_GET['from_shop'])) {
        header("location: ../../view/shop.php");
        exit();   

    }
    if (isset($_GET['from_product_detail'])) {
        header("Location: ../../view/product-detail.php?product_id=" . $product_id);
        exit();    
    }
}


?>