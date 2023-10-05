<?php 
session_start();
if(!isset($_SESSION['login'])){
    header("location: ../model/login.php");
    exit;
}
include ("../Model/database.php");
if(isset($_GET['product_id']) && isset($_GET['quantity'])){
    $user_id = $_SESSION['user_id'] ;
    $quantity = htmlspecialchars($_GET['quantity']);
    $product_id = htmlspecialchars($_GET['product_id']) ;
    $select_product = "select * from products where id = $product_id ;" ;
    $result_product = $connect->query($select_product);
    if($result_product->num_rows > 0 ){
        $row = $result_product->fetch_assoc() ;
        $price = $row['price'] ;
        $total_money = $price * $quantity ;
        $insert_cart = "insert into carts (product_id,price,quantity,total_money,user_id)
        values ($product_id,$price,$quantity,$total_money,$user_id);";
        $result_insert = $connect->query($insert_cart);
        if($result_insert){
            $message_success = "thêm giỏ hàng thành công" ;
            echo "<script> alert ('$message_success')</script>";
            header("location: main.php");
            exit;
        }
        else {
            $message_error = "thêm giỏ hàng thất bại" ;
            echo "<script> alert ('$message_error')</script>";
            header("location: main.php");
            exit;
        }
    }
    else {
        echo "Sản phẩm không tồn tại" ;
    }
}
$connect->close() ;
?>