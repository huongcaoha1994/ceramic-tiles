<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .product {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
      
    }

    .product img {
        width: 10%;
        height: 10vh;
        margin-right: 10px;
    }

    .product p {
        margin: 0;
    }
</style>
</head>
<body>
    <?php 
    session_start() ;
    include("../Model/database.php");
    $user_id = $_SESSION['user_id'] ;
    $select_cart = "select * from carts where user_id = $user_id ;" ;
    $result_cart = $connect->query($select_cart) ;
    if($result_cart->num_rows > 0 ) {
        $total_bill = 0 ;
        while($row = $result_cart->fetch_assoc()){
            ?>
            <div class="product">
            <img src="<?php 
            $select_image = "select image from products where product_id =". $row['product_id'].";" ;
            $result_image = $connect->query($select_image) ;
            if($result_image){
                $image = $result_image->fetch_assoc() ;
                echo $image ;
            }
            ?>" alt="Product Image">
            <p><?php echo $row['price']; ?></p>
            <p><?php echo $row['quantity']; ?></p>
            <p><?php echo $row['total_money']; ?></p>
            <?php $total_bill+= $row['total_money'] ; ?>
            <a href="delete.php?cart_id=<?php echo $row['cart_id']; ?>">delete</a>
            <a href="update.php?cart_id=<?php echo $row['cart_id']; ?>">update</a>
            </div>
            <?php
        }
        echo "<h3>Tổng tiền : $total_bill </h3>" ;
    }
    ?>
</body>
</html>