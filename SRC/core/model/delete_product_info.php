<?php

include("database.php");

$product_id = $_GET['product_id'];

$del_product = "delete from products where product_id = $product_id";

$connect->query($del_product);
header('location: ../../view/crud.php?del_success=Delete successfully');
$connect->close();

?>