<?php
session_start();

if (empty(($_SESSION['user_id']))) {
    header('Location: ../core/model/login.php?error=You have to login');
    exit();
}
require './header.php';

require '../core/model/database.php';
$sql = "select 
    orders.*,
    users.full_name,
    users.phone,
    users.address as user_address ,
    orders.address aS receiver_address
    from orders 
    join users
    on orders.user_id = users.user_id";
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
            <th>Created at</th>
            <th>Orderer's information</th>
            <th>Receiver's information</th>
            <th>Status</th>
            <th>Total amout</th>
            <th>View detail</th>
        </tr>
        <?php foreach ($result as $each): ?>
            <tr>
                <td>
                    <?php echo $each['created_at'] ?>
                </td>


                <td>
                    <?php echo $each['full_name'] ?>
                    <?php echo $each['phone'] ?>
                    <?php echo $each['user_address'] ?>
                </td>


                <td>
                    <?php echo $each['name_receiver'] ?>
                    <?php echo $each['phone_receiver'] ?>
                    <?php echo $each['receiver_address'] ?>
                </td>
                <td>
                    <?php 
                    switch ($each['status']) {
                        case 0:
                            echo "Pending";
                            break; 
                        case 1:
                            echo "Order is being delivered";
                            break;
                        case 2:
                            echo "Received";
                            break;
                        }
                    ?>
                </td>
                <td>
                    <?php echo $each['total_price']?>
                </td>
                <td>
                    <!-- <a href="order_detail.php?order_id=<?php echo $each['order_id']?>">View detail</a> -->
                </td>
            </tr>

    </table>

    <?php 
    $order_id = $each['order_id'];
    $sql = "select * from order_product
    join products on products.product_id = order_product.product_id
    where order_id = $order_id";

    $result = $connect->query($sql);
    foreach ($result as $each):
        $product_id = $each['product_id'];
            $sql = "select * from products 
                join order_product 
                on products.product_id = order_product.product_id
                where products.product_id = $product_id";
            $result = $connect->query($sql);
            $each = mysqli_fetch_array($result);
            ?>
            <img src="../assets/img/<?php echo $each['image']; ?>" alt="Product Image"
                        style="max-width: 100px;">
            
            <p><?php echo $each['product_name']; ?></p>
            <p><?php echo $each['price']; ?></p>
            <p><?php echo $each['quantity']; ?></p>
            <p><?php echo $each['price'] * $each['quantity']; ?></p>
            <?php
        endforeach; 
    ?>
            <?php endforeach ?>

</body>

</html>