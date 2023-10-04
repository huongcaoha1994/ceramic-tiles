<?php
include("../core/model/database.php");

$select_product = "";

if (isset($_GET['category'])) {
    $category = $_GET['category'];
    if ($category == "wall") {
        $select_product = "SELECT * FROM products WHERE category_id IN (1, 2, 3, 4, 5, 6, 7);";
    } else if ($category == "floor") {
        $select_product = "SELECT * FROM products WHERE category_id IN (8, 2, 3, 4, 5, 6, 7);";
    } else if ($category == "special") {
        $select_product = "SELECT * FROM products WHERE category_id IN (9, 2, 3, 4, 5, 6, 7);";
    }
} else if (isset($_POST['search'])) {
    $rs_search = htmlspecialchars($_POST['rs_search']);
    $select_product = "SELECT * FROM products
        JOIN categorys ON products.category_id = categorys.category_id
        WHERE products.product_name LIKE '%$rs_search%' OR categorys.category_name LIKE '%$rs_search%' OR products.color LIKE '%$rs_search%';";
} else {
    $select_product = "SELECT * FROM products;";
}

$result_product = $connect->query($select_product);
if ($result_product->num_rows > 0) {
    while ($row = $result_product->fetch_assoc()) {
        ?>
        <div class="container">
            <img src="../assets/img<?php echo $row['image'] ;?>" alt="" width="300" height="300">
            <h3><?php echo $row['product_name']; ?></h3>
            <h4>Price : <?php echo $row['price'] ;?></h4>
            <h4>Color : <?php echo $row['color'] ;?></h4>
            <h4>Inventory : <?php echo $row['inventory'] ;?></h4>
            <h4>Brand : <?php echo $row['brand'] ;?></h4>
            <h4>Size : <?php echo $row['size'] ;?></h4>
            <form action="" method="POST">
                <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ;?>">
                <input type="number" name="quantity">
                <input type="submit" name="add_to_cart" value="Add">
            </form>
        </div>
        <br>
        
        <?php
    }
}
?>