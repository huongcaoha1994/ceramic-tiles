<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if(isset($_POST['color'])){
    $color = $_POST['color'];
    if($color === ""){
      unset($_SESSION['color']);
    }
    else {
      $_SESSION['color'] = $color ;
    }
  }

  if(isset($_POST['brand'])){
    $brand = $_POST['brand'];
    if($brand === ""){
      unset($_SESSION['brand']);
    }
    else {
      $_SESSION['brand'] = $brand ;
    }
  }

  if(isset($_POST['size'])){
    $size = $_POST['size'];
    if($size === ""){
      unset($_SESSION['size']);
    }
    else {
      $_SESSION['size'] = $size ;
    }
  }

//   $color = $_POST['color'];
//   $_SESSION['color'] = $color ;
//   $brand = $_POST['brand'] ;
//   $_SESSION['brand'] = $brand ;
//   $size = $_POST['size'] ;
//   $_SESSION['size'] = $size ;

// if($_SESSION['color'] === ""){
//   unset($_SESSION['color']);
// }

// if($_SESSION['brand'] === ""){
//   unset($_SESSION['brand']);
// }

// if($_SESSION['size'] === ""){
//   unset($_SESSION['size']);
// }

if(isset($_SESSION['color'])){
  $color = $_SESSION['color'] ;
  $select_filter = "SELECT * FROM products WHERE color = '$color'" ;
  if(isset($_SESSION['brand'])){
    $brand = $_SESSION['brand'] ;
    $select_filter = $select_filter." and brand = '$brand'" ;
  }
  if(isset($_SESSION['size'])){
    $size = $_SESSION['size'] ;
    $select_filter = $select_filter." and size = '$size'" ;
  }
}
else if(isset($_SESSION['brand'])){
  $brand = $_SESSION['brand'] ;
  $select_filter = "SELECT * FROM products WHERE brand = '$brand'" ;
  if(isset($_SESSION['color'])){
    $color = $_SESSION['color'] ;
    $select_filter = $select_filter." and color = '$color'" ;
  }
  if(isset($_SESSION['size'])){
    $size = $_SESSION['size'] ;
    $select_filter = $select_filter." and size = '$size'" ;
  }
}

else if(isset($_SESSION['size'])){
  $size = $_SESSION['size'] ;
  $select_filter = "SELECT * FROM products WHERE size = '$size'" ;
  if(isset($_SESSION['brand'])){
    $brand = $_SESSION['brand'] ;
    $select_filter = $select_filter." and brand = '$brand'" ;
  }
  if(isset($_SESSION['color'])){
    $color = $_SESSION['color'] ;
    $select_filter = $select_filter." and color = '$color'" ;
  }
}
else {
  $select_filter = "SELECT * FROM products ;";
}
  
    include("../core/model/database.php");
   
    $result_filter = $connect->query($select_filter);
    if($result_filter->num_rows > 0) {
      while($row = $result_filter->fetch_assoc()){
        ?>
        <div class="col-6 col-md-4 mb-3 mb-md-3 px-2">
                  <div class="card h-100 ">
                      <a href="#">
                      <img src="../assets/img<?php echo $row['image']; ?>" alt="" width="100%" height="300px">
                      </a>
                      <div class="card-body set-equal">
                          <h5 class="product-view"><?php echo $row['product_name']; ?></h5>
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
                              <button class="btn btn-primary">Add to cart</button>
                          </div>
                      </div>
                  </div>
              </div>
  
          <br>
        <?php
      }
    
  }
  else {
    echo "Không tìm thấy sản phẩm nào !" ;
  }
 
}
else {
  include("search.php");
}
?>