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

  // $color = $_POST['color'];
  // $_SESSION['color'] = $color ;
  // $brand = $_POST['brand'] ;
  // $_SESSION['brand'] = $brand ;
  // $size = $_POST['size'] ;
  // $_SESSION['size'] = $size ;

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
  $select_filter = "SELECT * FROM products ";
}
  
    include("../core/model/database.php");
   $item_per_page = 6 ;
   $total_item = 0 ;
   $result_total = $connect->query($select_filter);
   if($result_total->num_rows > 0){
    while($row1 = $result_total->fetch_assoc()){
      $total_item++ ;
    }
   }
   $total_page = ceil($total_item / $item_per_page);
   $current_page = (isset($_GET['page'])) ? $_GET['page'] : 1 ;
   $current_page = max(1, min($current_page,$total_page));
   $start = ($current_page - 1 ) * $item_per_page + 1 ;
   $select_filter = $select_filter." limit $start ,$item_per_page  " ;
    $result_filter = $connect->query($select_filter);
    if($result_filter->num_rows > 0) {
      while($row = $result_filter->fetch_assoc()){
        ?>
        <div class="col-6 col-md-4 mb-3 mb-md-3 px-2">
                  <div class="card h-100 ">
                      <a href="../view/product-detail.php?product_id=<?php echo $row['product_id']; ?>">
                      <img src="../assets/img/<?php echo $row['image']; ?>" alt="" width="100%" height="300px">
                      </a>
                      <div class="card-body set-equal">
                          <h5 class="product-view"><?php echo $row['product_name']; ?></h5>
                          <h6>Price : <?php echo $row['price']; ?>$</h6>
                          <h6>Color : <?php echo $row['color']; ?></h6>
                          <h6>Inventory : <?php echo $row['inventory']; ?></h6>
                          <h6>Brand : <?php echo $row['brand']; ?></h6>
                          <h6>Size : <?php echo $row['size']; ?></h6>
                          <form action="../core/model/add_to_cart.php?product_id=<?php echo $row['product_id']; ?>" method="POST">
                           
                            <label for="quantity">Quantity :</label>
                            <input type="number" name="quantity">
                           
                            <button class="btn btn-primary" type="submit" name="add_to_cart">Add to cart</button>
                        </form>
                          <!-- <div class="d-flex justify-content-between mb-2">
                              <button class="btn btn-primary" type="submit" name="add_to_cart">Add to cart</button>
                          </div> -->
                      </div>
                  </div>
              </div>
  
          <br>
        <?php
      }
      echo "<div id='pagination'>";

      $previous_page = $current_page - 5;
      $next_page = $current_page + 5;
      
      if ($previous_page > 0) {
          echo "<a href='shop.php?page=$previous_page'>&lt;&lt;</a>";
      }
      
      $start_page = max(1, $current_page);
      $end_page = min($start_page + 4, $total_page);
      
      for ($i = $start_page ; $i <= $end_page; $i++) {
          echo "<a href='shop.php?page=$i'>  $i   </a>";
      }
      
      if ($next_page <= $total_page) {
          echo "<a href='shop.php?page=$next_page'>&gt;&gt;</a>";
      }
      
      echo "</div>";
}
else {
  echo "<h2> Không tìm thấy sản phẩm nào !</h2>";
}
}

?>