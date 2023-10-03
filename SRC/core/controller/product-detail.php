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
    include("../model/database.php");
        if(isset($_GET['product_id'])){
            $product_id = htmlspecialchars($_GET['product_id']) ;
            $get_product = "select * from products where product_id = $product_id ;" ;
            $result_product = $connect->query($get_product);
            if($result_product->num_rows > 0 ){
                $row = $result_product->fetch_assoc() ;
                ?>
                    <div>
                        <img src="<?php echo $row['image'] ; ?>" alt="<?php echo $row['product_name'] ; ?>">
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
</body>
</html>