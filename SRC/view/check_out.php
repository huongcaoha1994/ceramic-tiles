<?php
session_start();
if (empty(($_SESSION['user_id']))) {
    header('Location: ../core/model/login.php?error=You have to login');
    exit();
}
if(empty($_SESSION['cart'])) {
    header('location: ./shop.php?err_add=Please add product to cart');
    exit();
}

require 'header.php';
require '../core/model/database.php';
$id = $_SESSION['user_id'];
$sql = "select * from users where user_id = $id";
$result = mysqli_query($connect, $sql);
$each = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Out</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <div class="py-5 text-center">
        <h2>Check Out</h2>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h3>Shipping Information</h3>
                <form action="../core/model/process_checkout.php" method="POST">
                    <div class="form-group">
                        <label for="name_receiver">Name</label>
                        <input type="text" class="form-control" name="name_receiver" value="<?php echo $each['full_name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="phone_receiver">Phone</label>
                        <input type="text" class="form-control" name="phone_receiver" value="<?php echo $each['phone'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="address_receiver">Address</label>
                        <input type="text" class="form-control" name="address_receiver" value="<?php echo $each['address'] ?>">
                    </div>
                
            </div>
            <div class="col-md-6">
                <h3>Order Summary</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_SESSION['cart'])) {
                            $cart = $_SESSION['cart'];
                            $sum = 0;
                            foreach ($cart as $product_id => $quantity) {
                                $sql = "select * from products where product_id = $product_id";
$result = $connect->query($sql);
                                $each = mysqli_fetch_array($result);
                        ?>
                                <tr>
                                    <td>
                                        <img src="../assets/img/<?php echo $each['image']; ?>" alt="Product Image" style="max-width: 100px;">
                                        <?php echo $each['product_name']; ?>
                                    </td>
                                    <td><?php echo $each['price']; ?></td>
                                    <td><?php echo $quantity; ?></td>
                                    <td>
                                        <?php
                                        $rs = $each['price'] * $quantity;
                                        echo $rs;
                                        ?>
                                    </td>
                                </tr>
                        <?php
                                $sum += $rs;
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <h3 class="float-right">Total Amount: <?php echo isset($sum) ? $sum : 0; ?></h3>
            </div>
        </div>
        <div class="float-right">Purchase method:
                            <input type="radio" name="purchase_method" value="1" checked> Cash
                            <input type="radio" name="purchase_method" value="2"> Bank Transfer 
                </div>
        <div class="row mt-4">
        <div class="row mt-4">
            <div class="col-6">
                <a href="views_cart.php" class="btn btn-primary">Back to Cart</a>
            </div>
            <div class="col-6">
            <button type="submit" class="btn btn-primary float-right">Check Out</button>
            </div>
        </div>
        </form>
    </div>
    <div class="mt-4"></div>
    <?php include 'footer.php'; ?>
</body>

</html> 