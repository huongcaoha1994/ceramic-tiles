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

    <div class="col-6 col-lg-3 mb-3 mb-md-3 px-2 ">
      <div class="card h-100">
        <a href="../core/controller/product-detail.php?product_id=<?php echo $row['product_id']; ?>"> <img src="../assets/img<?php echo $row['image']; ?>" alt="" width="100%" height="300"></a>

        <div class="card-body set-equal">


          <div class="d-flex justify-content-between mb-3">
            <h5 class="mb-0 product-view"><?php echo $row['product_name']; ?></h5>
            <h5 class="text-dark mb-0 product-view"><?php echo $row['price']; ?>$</h5>
          </div>

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