<?php 
require './database.php';

$name_receiver = $_POST['name_receiver'];
$phone_receiver = $_POST['phone_receiver'];
$address_receiver = $_POST['address_receiver'];

session_start();
$cart = $_SESSION['cart'];

$total_price = 0;

foreach ($cart as $id => $quantity) {
    $sql = "SELECT price FROM products WHERE product_id = $id";
    $result = $connect->query($sql);
    $product = mysqli_fetch_array($result);

    if ($product) {
        $total_price += $product['price'] * $quantity;
        //price from database and quantity from session 
    }
    
    $user_id = $_SESSION['user_id'];
    $status = 0;
    
    }
$sql = "insert into orders (user_id, name_receiver, phone_receiver, address, status, total_price)
    values ('$user_id', '$name_receiver', '$phone_receiver', '$address_receiver', '$status', '$total_price')";

$connect->query($sql);

$sql = "select max(order_id) from orders where user_id =$user_id";
$result = mysqli_query($connect, $sql);
$oder_id = mysqli_fetch_array($result)['max(order_id)'];

foreach ($cart as $id => $each) {
    $sql = "insert into order_product(order_id, product_id, quantity)
        values ($oder_id, $id, $each)";
        mysqli_query($connect, $sql);
}
mysqli_close($connect);
unset($_SESSION['cart']);
header('location: ../../view/shop.php');
?>