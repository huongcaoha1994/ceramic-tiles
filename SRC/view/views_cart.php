<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
session_start();
$cart = $_SESSION['cart'];
require '../core/model/database.php';
?>
<table border="1" width="100%">
    <tr>
        <th>Ảnh</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Tổng tiền</th>
        <th>Xóa</th>
    </tr>
    <?php foreach($cart as $product_id => $quantity): ?>
        <?php
        $sql = "select * from products
                where product_id = $product_id";
        $result = $connect->query($sql);
        $each = mysqli_fetch_array($result);    
        ?>
    <tr>
        <td><img height="100" src="../assets/img<?php echo $each['image'] ;?>" ></td>
        <td><?php echo $each['product_name']; ?></td>
        <td><?php echo $each['price']; ?></td>
        <td>
            <a href="update_quantity_cart.php?product_id=<?php echo $product_id?>&type=desc"> - </a>
            <?php echo $quantity; ?>
            <a href="update_quantity_cart.php?product_id=<?php echo $product_id?>&type=asc"> + </a>
        </td>
        <td><?php echo $each['price'] * $quantity; ?></td>
        <td><a href="product_cart_delete.php?product_id=<?php echo $product_id?>">Xóa sản phẩm</a></td>
    </tr>
        <?php endforeach ?>
</table>

<a href="shop.php">Quay lại trang mua</a>
</body>
</html>