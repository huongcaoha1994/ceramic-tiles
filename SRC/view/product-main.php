<?php 
  include("../core/model/database.php");
  $select_product = "" ;
  if(isset($_POST['search'])){
    $category = htmlspecialchars($_POST['category']) ;
    if($category == "wall"){
      $select_product = "select * from products where category_id = 1 limit 8 ; " ;
    }
    else if ($category == "floor"){
      $select_product = "select * from products where category_id = 8 limit 8 ; " ;
    }
    else if ($category == "special"){
      $select_product = "select * from products limit where category_id = 9 limit 8 ; " ;
    }
    else {
      $select_product = "select * from products limit 8 ; " ;
    }
  }
  $result_product = $connect->query($select_product);
  if ($result_product->num_rows > 0 ){
    while($row = $result_product->fetch_assoc()){
      ?>
        <div class="container">
          <div class="row"></div>
        <div class="col-6 col-2-4 mb-3 mb-md-3 px-2">
                  <div class="card h-100">
                  <img src="../assets/img<?php echo $row['image'] ;?>" alt="" width="300" height="300">

                  <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                        <p class="small text-danger"><s>$1099</s></p>
                      </div>

                      <div class="d-flex justify-content-between mb-3">
                        <h6 class="mb-0 product-view">HP Notebook</h6>
                        <h6 class="text-dark mb-0 product-view">$9999999</h6>
                      </div>

                      <div class="d-flex justify-content-between mb-2">
                        <p class="text-muted mb-0">Available: <span class="fw-bold">6</span></p>

                      </div>
                      <div class="d-flex justify-content-between mb-2">
                        <button class="btn btn-primary">Add to cart</button>
                      </div>
                    </div>
                  </div>
                </div>
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
      <?php
    }
  }
?>

