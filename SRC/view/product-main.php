<?php
include("../core/model/database.php");

$select_product = "";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['category'])) {
  $category = $_POST['category'];

  if ($category === "wall") {
    $select_product = "SELECT * FROM products WHERE category_id IN (11,21) LIMIT 8";
  } else if ($category === "floor") {
    $select_product = "SELECT * FROM products WHERE category_id IN (18,28) LIMIT 8";
  } else if ($category === "special") {
    $select_product = "SELECT * FROM products WHERE category_id IN (19) LIMIT 8";
  }
} else {
  $select_product = "SELECT * FROM products LIMIT 8";
}

$result_product = $connect->query($select_product);

if ($result_product->num_rows > 0) {
  while ($row = $result_product->fetch_assoc()) {
?>

    <div class="col-6 col-lg-3 mb-3 mb-md-3 px-2">
      <div class="card h-100">
        <a href="../view/product-detail.php?product_id=<?php echo $row['product_id']; ?>">
          <img src="<?php echo $row['image']; ?>" alt="" width="100%" height="300">
        </a>

        <div class="card-body set-equal">
          <div class="d-flex justify-content-between mb-3 flex-column">
            <h6 class="mb-0 product-view"><?php echo $row['product_name']; ?></h6>
            <h6 class="text-dark mb-0 product-view">Price: <?php echo $row['price']; ?>$</h6>
          </div>


          <div class="d-flex justify-content-between mb-2">
            <form action="../core/model/add_to_cart.php?product_id=<?php echo $row['product_id'] ; ?>&from_main" method="POST">
              <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
              <input type="submit" name="add_to_cart" value="Add to cart" class="btn btn-primary">
            </form>
          </div>
        </div>
      </div>
    </div>

<?php
  }
}
?>