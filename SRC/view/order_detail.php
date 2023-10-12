<?php
session_start();

require './header.php';

require '../core/model/database.php';
$order_id = $_GET['order_id'];
$sql = "select * from order_product
    join products on products.product_id = order_product.product_id
    where order_id = $order_id";

$result = $connect->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>

<body>
    <table>
        <tr>
            <th>Image</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
        <?php
                        if (isset($_SESSION['cart'])) {
                            $cart = $_SESSION['cart'];
                            $sum = 0;
                            foreach ($cart as $product_id => $quantity):
                                $sql = "select * from products where product_id = $product_id";
                                $result = $connect->query($sql);
                                $each = mysqli_fetch_array($result);
                                ?>
                                <tr>
                                    <td><img src="../assets/img/<?php echo $each['image']; ?>" alt="Product Image"
                                            style="max-width: 100px;"></td>
                                    <td>
                                        <?php echo $each['product_name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $each['price']; ?>
                                    </td>
                                    <td>
                                        <a href="../core/model/update_quantity_cart.php?product_id=<?php echo $product_id ?>&type=desc"
                                            class="btn btn-sm btn-primary">-</a>
                                        <?php echo $quantity; ?>
                                        <a href="../core/model/update_quantity_cart.php?product_id=<?php echo $product_id ?>&type=asc"
                                            class="btn btn-sm btn-primary">+</a>
                                    </td>
                                    <td>
                                        <?php
                                        $rs = $each['price'] * $quantity;
                                        echo $rs;
                                        ?>
                                    </td>
                                    <td>
                                        <a href="../core/model/product_cart_delete.php?product_id=<?php echo $product_id ?>">
                                            <button class="btn btn-danger">
                                                <i class="fa-solid fa-trash-can"></i> Remove
                                            </button>
</a>
                                    </td>
                                </tr>
                                <?php
                                $sum += $rs;
                            endforeach;
                        } else { ?>
                            <tr>
                                <td colspan="6"></td>
                            </tr>
                        <?php } ?>
    </table>
</body>

</html>