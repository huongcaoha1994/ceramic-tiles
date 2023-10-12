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
                            echo "Đang giao hàng";
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
                    <a href="order_detail.php?order_id=<?php echo $each['order_id']?>">View detail</a>
                </td>
            </tr>


        <?php endforeach ?>
    </table>
</body>

</html>