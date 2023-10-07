<?php 
include("../core/model/database.php") ;
$select_product = "select * from products where brand = 'Viglacera' limit 10 ;" ;
$result_product = $connect->query($select_product);
if($result_product->num_rows > 0 ){
    while($row = $result_product->fetch_assoc()){
        ?>
           
                <img src="../assets/img<?php echo $row['image']; ?>" class="card-img-top" height="150px" width="150px" alt="Laptop" />
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <p class="small"><a href="#!" class="text-muted">Tiles</a></p>
                    <p class="small text-danger"><s>$99</s></p>
                  </div>

                  <div class="d-flex justify-content-between mb-3">
                    <h6 class="mb-0 me-2 product-view"><?php echo $row['product_name']; ?></h6>
                    <h6 class="text-dark ms-2 mb-0 product-view"><?php echo $row['price']; ?>$</h6>
                  </div>

                  <div class="d-flex justify-content-between mb-2">
                    <p class="text-muted mb-0">Available: <span class="fw-bold"><?php echo $row['inventory']; ?></span></p>

                  </div>
                  <div class="d-flex justify-content-between mb-2">
                    <button class="btn btn-primary">Add to cart</button>
                  </div>
                </div>
              
        <?php
    }
}
?>