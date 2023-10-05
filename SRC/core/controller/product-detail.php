<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <h1>Product Detail</h1>
    <?php
    session_start();
    if(!isset($_SESSION['login'])){
        header("location: ../model/login.php");
        exit;
    }
    include("../model/database.php");
        if(isset($_GET['product_id'])){
            $product_id = htmlspecialchars($_GET['product_id']) ;
            $get_product = "select * from products where product_id = $product_id ;" ;
            $result_product = $connect->query($get_product);
            if($result_product->num_rows > 0 ){
                $row = $result_product->fetch_assoc() ;
                ?>
                    <div>
                        <img src="../../assets/img<?php echo $row['image'] ; ?>" alt="" width="300" height="300">
                        <h2><?php echo $row['product_name'] ; ?></h2>
                        <h3>Price : <?php echo $row['price'] ; ?></h3>
                        <h3>Color : <?php echo $row['color'] ; ?></h3>
                        <h3>Inventory : <?php echo $row['inventory'] ; ?></h3>
                        <h3>Brand : <?php echo $row['brand'] ; ?></h3>
                        <h3>Size : <?php echo $row['size'] ; ?></h3>
                        <h4>Description : <?php echo $row['description'] ; ?></h4>
                        <form action="" method="POST">
                            <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ; ?>">
                            <label for="quantity">Quantity : </label>
                            <input type="number" name="quantity" required>
                            <br>
                            <input type="submit" name="add_to_cart" value="Add">
                        </form>

                    </div>
                <?php
            }
        }
    ?>

    <?php 
    
   
    if(isset($_POST['add_to_cart'])){
        $product_id = htmlspecialchars($_POST['product_id']);
        $quantity = htmlspecialchars($_POST['quantity']);
        $get_product = "select * from products where product_id = $product_id ;" ;
        $result_product = $connect->query($get_product);
        if($result_product->num_rows > 0 ){
            $row = $result_product->fetch_assoc();
            $product_id = $row['product_id'] ;
            $price = $row['price'] ;
            $total_money = $quantity * $price ;
            $user_id = $_SESSION['user_id'] ;
            $insert_cart = "insert into carts (product_id,price,quantity,total_money,user_id)
            values ($product_id,$price,$quantity,$total_money,$user_id) ;" ;
            if($connect->query($insert_cart)){
                echo "<script> alert ('thêm giỏ hàng thành công')</script>" ;
                // header("location: ../../view/home.php");
                // exit ;
            }
            else {
                echo "<script> alert ('xin vui lòng thử lại !')</script>" ;
            }
        }
    }
    ?>
    <a href="../../view/shop.php">Go to Shop</a>
</body>
</html>