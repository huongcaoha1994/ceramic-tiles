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
    <div class="container border rounded-1 my-5">
        <?php foreach ($result as $order): ?>
            <table class="table table-responsive">
                <tr>
                    <th>Created at</th>
                    <th>Orderer's information</th>
                    <th>Receiver's information</th>
                    <th>Total amount</th>
                    <th>Purchase method</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>
                        <?php echo $order['created_at'] ?>
                    </td>
                    <td>
                        <?php echo $order['full_name'] ?>
                        <?php echo $order['phone'] ?>
                        <?php echo $order['user_address'] ?>
                    </td>
                    <td>
                        <?php echo $order['name_receiver'] ?>
                        <?php echo $order['phone_receiver'] ?>
                        <?php echo $order['receiver_address'] ?>
                    </td>
                    <td>
                        <?php echo $order['total_price'] ?>
                    </td>
                    <td>
                        <?php
                        switch ($order['purchase_method']) {
                            case 1:
                                echo "Cash";
                                break;
                            case 2:
                                echo "Bank Transfer";
                                break;
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        switch ($order['status']) {
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
                </tr>
            </table>

            <?php
            $order_id = $order['order_id'];
            $sql = "select * from order_product
                    join products on products.product_id = order_product.product_id
                    where order_id = $order_id";

            $product_result = $connect->query($sql);
            foreach ($product_result as $product) {
                $product_id = $product['product_id'];
                $sql = "select * from products 
                        join order_product 
                        on products.product_id = order_product.product_id
                        where products.product_id = $product_id";
                $result = $connect->query($sql);
                $product_info = mysqli_fetch_array($result);
                ?>
                <div class="container ms-3">
                    <div class="row py-2">
                        <div class="col-10 col-lg-3 d-flex">
                            <img src="../assets/img/<?php echo $product_info['image']; ?>" alt="Product Image"
                                style="max-width: 50px;">
                            <span class="px-2 h6">
                                <?php echo $product_info['product_name']; ?>
                            </span>
                        </div>
                        <div class="col-2 col-lg-1 ">
                            <p class="h6">
                                <?php echo $product_info['price']; ?>$
                            </p>
                        </div>
                        <div class="col-6 col-lg-1 ">
                            <p>Quantity:
                                <?php echo $product['quantity']; ?>
                            </p>
                        </div>
                        <div class="col-6 col-lg-1  text-end">
                            <p>Total:
                                <?php echo $product_info['price'] * $product['quantity']; ?>$
                            </p>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        <?php endforeach; // End of the foreach loop for orders ?>
    </div>
<?php 
include('footer.php');
?>
</body>

</html>