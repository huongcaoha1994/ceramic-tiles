<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #pagination a{
            text-decoration: none;
            font-size: 20px;
        }
        #pagination a:hover {
            color: black;
        }
    </style>
    
</head>
<body>
<?php
include("../core/model/database.php");

$select_product = "";

if (isset($_GET['category'])) {
    $category = $_GET['category'];
    // if ($category == "wall") {
    //     $select_product = "SELECT * FROM products WHERE category_id = 1";
    // } 
     if ($category == "wallbathroom") {
        $select_product = "SELECT * FROM products WHERE category_id = 11";
    }
    else if ($category == "floorbathroom") {
        $select_product = "SELECT * FROM products WHERE category_id = 21";
    }
     else if ($category == "wallkitchen") {
        $select_product = "SELECT * FROM products WHERE category_id = 12";
    }
    else if ($category == "floorkitchen") {
        $select_product = "SELECT * FROM products WHERE category_id = 22";
    }
     else if ($category == "walloutdoor") {
        $select_product = "SELECT * FROM products WHERE category_id = 13";
    }
    else if ($category == "flooroutdoor") {
        $select_product = "SELECT * FROM products WHERE category_id = 23";
    }
     else if ($category == "wallliving") {
        $select_product = "SELECT * FROM products WHERE category_id = 14";
    }
    else if ($category == "floorliving") {
        $select_product = "SELECT * FROM products WHERE category_id = 24";
    }
     else if ($category == "wallbedroom") {
        $select_product = "SELECT * FROM products WHERE category_id = 15";
    }
    else if ($category == "floorbedroom") {
        $select_product = "SELECT * FROM products WHERE category_id = 25";
    }
     else if ($category == "wallcommercial") {
        $select_product = "SELECT * FROM products WHERE category_id = 16";
    }
    else if ($category == "floorcommercial") {
        $select_product = "SELECT * FROM products WHERE category_id = 26";
    }
     else if ($category == "wallspecial") {
        $select_product = "SELECT * FROM products WHERE category_id = 19";
    }
    else if ($category == "allwall") {
        $select_product = "SELECT * FROM products WHERE category_id IN (11,12,13,14,15,1619)";
    }
    else if ($category == "allfloor") {
        $select_product = "SELECT * FROM products WHERE category_id IN (21,22,23,24,25,26)";
    }
    else if ($category == "allspecial") {
        $select_product = "SELECT * FROM products WHERE category_id = 19 ";
    }
} else if (isset($_POST['search'])) {
    $rs_search = htmlspecialchars($_POST['rs_search']);
    $select_product = "SELECT * FROM products
        JOIN categorys ON products.category_id = categorys.category_id
        WHERE products.product_name LIKE '%$rs_search%' OR categorys.category_name LIKE '%$rs_search%'
         OR products.color LIKE '%$rs_search%' OR products.price LIKE '%$rs_search%'
         OR products.brand LIKE '%$rs_search%' OR products.size LIKE '%$rs_search%'";
} else {
    $select_product = "SELECT * FROM products";
}
$item_per_page = 6 ;
$total_item = 0 ;
$result_total = $connect->query($select_product);
if($result_total->num_rows > 0){
 while($row = $result_total->fetch_assoc()){
   $total_item++ ;
 }
}
$total_page = ceil($total_item / $item_per_page);
$current_page = (isset($_GET['page'])) ? $_GET['page'] : 1 ;
$current_page = max(1, min($current_page,$total_page));
$start = ($current_page - 1 ) * $item_per_page + 1 ;
$select_product = $select_product." limit $start ,$item_per_page  " ;
$result_product = $connect->query($select_product);
if ($result_product->num_rows > 0) {
    while ($row = $result_product->fetch_assoc()) {
?>

            <div class="col-6 col-md-4 mb-3 mb-md-3 px-2">
                <div class="card h-100 ">
                    <a href="../view/product-detail.php?product_id=<?php echo $row['product_id'] ;?>">
                    <img src="../assets/img/<?php echo $row['image']; ?>" alt="" width="100%" height="300px">
                    </a>
                    <div class="card-body set-equal">
                        <a href="../view/product-detail.php?product_id=<?php echo $row['product_id'] ;?>" class="text-decoration-none">
                        <h5 class="product-view-shop"><?php echo $row['product_name']; ?></h5>
                        </a>
                        <h6>Price : <?php echo $row['price']; ?>$</h6>
                        <h6>Color : <?php echo $row['color']; ?></h6>
                        <h6>Inventory : <?php echo $row['inventory']; ?></h6>
                        <h6>Brand : <?php echo $row['brand']; ?></h6>
                        <h6>Size : <?php echo $row['size']; ?></h6>
                        <!-- <form action="" method="POST">
                            <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                            <input type="number" name="quantity">
                            <input type="submit" name="add_to_cart" value="Add">
                        </form> -->
                        <div class="d-flex justify-content-between mb-2">
                        <form action="../core/model/add_to_cart.php?product_id=<?php echo $row['product_id'] ; ?>" method="POST">
                            <input type="submit" name="add_to_cart" value="Add to cart" class="btn btn-primary">
                        </form>
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
 echo "<div id='pagination'>" ;
for($i = 1 ; $i <= $total_page ; $i++){
    echo "<a href='shop.php?page=$i'> $i </a>" ;
  }
  echo "</div>" ;
?>

</body>
</html>