<?php
include("../core/model/database.php");

$select_product = "";

if (isset($_GET['category'])) {
    $category = $_GET['category'];
    if ($category == "wall") {
        $select_product = "SELECT * FROM products WHERE category_id = 1;";
    } else if ($category == "bathroom") {
        $select_product = "SELECT * FROM products WHERE category_id = 2;";
    } else if ($category == "kitchen") {
        $select_product = "SELECT * FROM products WHERE category_id = 3;";
    } else if ($category == "outdoor") {
        $select_product = "SELECT * FROM products WHERE category_id = 4;";
    } else if ($category == "living") {
        $select_product = "SELECT * FROM products WHERE category_id = 5;";
    } else if ($category == "bedroom") {
        $select_product = "SELECT * FROM products WHERE category_id = 6;";
    } else if ($category == "commercial") {
        $select_product = "SELECT * FROM products WHERE category_id = 7;";
    } else if ($category == "floor") {
        $select_product = "SELECT * FROM products WHERE category_id = 8;";
    } else if ($category == "special") {
        $select_product = "SELECT * FROM products WHERE category_id = 9;";
    }
} else if (isset($_POST['search'])) {
    $rs_search = htmlspecialchars($_POST['rs_search']);
    $select_product = "SELECT * FROM products
        JOIN categorys ON products.category_id = categorys.category_id
        WHERE products.product_name LIKE '%$rs_search%' OR categorys.category_name LIKE '%$rs_search%'
         OR products.color LIKE '%$rs_search%' OR products.price LIKE '%$rs_search%'
         OR products.brand LIKE '%$rs_search%' OR products.size LIKE '%$rs_search%';";
} else {
    $select_product = "SELECT * FROM products;";
}

$result_product = $connect->query($select_product);
if ($result_product->num_rows > 0) {
    while ($row = $result_product->fetch_assoc()) {
?>

            <div class="col-6 col-md-3 mb-3 mb-md-3 px-2">
                <div class="card h-100">
                    <img src="../assets/img<?php echo $row['image']; ?>" alt="" width="100%" height="100%">
                    <div class="card-body">
                        <h3><?php echo $row['product_name']; ?></h3>
                        <h4>Price : <?php echo $row['price']; ?></h4>
                        <h4>Color : <?php echo $row['color']; ?></h4>
                        <h4>Inventory : <?php echo $row['inventory']; ?></h4>
                        <h4>Brand : <?php echo $row['brand']; ?></h4>
                        <h4>Size : <?php echo $row['size']; ?></h4>
                        <form action="" method="POST">
                            <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                            <input type="number" name="quantity">
                            <input type="submit" name="add_to_cart" value="Add">
                        </form>
                        <div class="d-flex justify-content-between mb-2">
                            <button class="btn btn-primary">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>

        <br>

<?php
    }
} else {
    echo "<h2>Không tìm thấy sản phẩm nào !</h2>";
}
?>