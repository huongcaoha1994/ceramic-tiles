<?php
    include './header.php';
    
    if (empty(($_SESSION['user_id']))) {
        header('Location: ../core/model/login.php?error=You have to login');
        exit();
    }


    require '../core/model/database.php';
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cart</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h2>Shopping Cart</h2>
                <p>There are
                    <?php
                    if (isset($_SESSION['cart'])) {
                        echo count($_SESSION['cart']); 
                    } else {
                    ?> 0
                    <?php    
                    }
                    ?> products in the cart
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
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
                                        echo $each['price'] * $quantity;
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
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h3 class="float-right">
                    Total amount:
                    <?php 
                    if (isset($_SESSION['cart'])) {
                    echo $sum; 
                    } else {
                    ?> 0 <?php } ?>
                </h3>
            </div>
        </div>
        <div class="row">        
            <div class="col-6">
                <a href="shop.php" class="btn btn-primary">Back to Shop</a>
            </div>
            <div class="col-6 ">
                <a href="order.php" class="btn btn-primary float-right">Buy now</a>
            </div>
        </div>
    </div>
    <div class="mt-4"></div>

    <?php include 'footer.php'; ?>


</body>

</html>