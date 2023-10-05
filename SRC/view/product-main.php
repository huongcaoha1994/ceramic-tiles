<?php
include("../core/model/database.php");
$select_product = "";
if (isset($_POST['search'])) {
  $category = htmlspecialchars($_POST['category']);
  if ($category == "wall") {
    $select_product = "select * from products where category_id = 1 limit 8 ; ";
  } else if ($category == "floor") {
    $select_product = "select * from products where category_id = 8 limit 8 ; ";
  } else if ($category == "special") {
    $select_product = "select * from products where category_id = 9 limit 8 ; ";
  }
} else {
  $select_product = "select * from products limit 8 ; ";
}
$result_product = $connect->query($select_product);
if ($result_product->num_rows > 0) {
  while ($row = $result_product->fetch_assoc()) {
?>

    <div class="col-6 col-lg-3 mb-3 mb-md-3 px-2">
      <div class="card h-100">
        <a href="../core/controller/product-detail.php?product_id=<?php echo $row['product_id']; ?>"> <img src="../assets/img<?php echo $row['image']; ?>" alt="" width="100%" height="300"></a>

        <div class="card-body">


          <div class="d-flex justify-content-between mb-3">
            <h6 class="mb-0 product-view"><?php echo $row['product_name']; ?></h6>
            <h6 class="text-dark mb-0 product-view"><?php echo $row['price']; ?>$</h6>
          </div>

          <div class="d-flex justify-content-between mb-2">
            <p class="text-muted mb-0">Available: <span class="fw-bold"><?php echo $row['inventory']; ?></span></p>

          </div>
          <h4>Brand : <?php echo $row['brand']; ?></h4>
            <h4>Size : <?php echo $row['size']; ?></h4>
            <h4>Color : <?php echo $row['color']; ?></h4>
          <div class="d-flex justify-content-between mb-2">
            <button class="btn btn-primary">Add to cart</button>
          </div>
        </div>
      </div>
      </div>
  <?php
  }
}
  ?>