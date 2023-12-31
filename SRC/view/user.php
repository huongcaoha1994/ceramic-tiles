<?php

require '../core/model/database.php';

if (isset($_GET['received']) && isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];
    
    $sql = "UPDATE orders SET status = 2 WHERE order_id = $order_id";
    $update_result = $connect->query($sql);
    header('Location: ./user.php');
    exit();
}

require './header.php';
require '../core/model/database.php';
if (empty(($_SESSION['user_id']))) {
    ?>
    <script>
        window.location.href = '../core/model/login.php?error=You have to login';
    </script>   
    <?php
    exit();
}

$user_id = $_SESSION['user_id'];

$sql = "select 
    orders.*,
    users.full_name,
    users.phone,
    users.address as user_address ,
    orders.address aS receiver_address
    from orders 
    join users
    on orders.user_id = users.user_id
    where orders.user_id = $user_id";
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
    <div class="container border rounded-1 my-5 p-0">
        <?php foreach ($result as $order): ?>
            <table class="table table-responsive">
                <tr class="overflow-x-scroll">
                    <th class="bg-secondary text-light">Created at</th>
                    <th class="bg-secondary text-light" class="bg-secondary text-light">Orderer's information</th>
                    <th class="bg-secondary text-light">Receiver's information</th>
                    <th class="bg-secondary text-light">Total amount</th>
                    <th class="bg-secondary text-light">Purchase method</th>
                    <th class="bg-secondary text-light" style="width: 125px">Status</th>
                </tr>
                <tr class="align-middle">
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
                                ?>
                                <br>
                                <a class="btn btn-primary"
                                    href="./user.php?order_id=<?php echo $order['order_id']; ?>&received">Received</a>
                                <?php
                                break;
                            case 2:
                                echo "Received";
                                break;
                            case 3:
                                echo "Order has been cancelled";
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
                            <img src="<?php echo $product_info['image']; ?>" alt="Product Image" style="max-width: 50px;">
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
                <br><br>
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