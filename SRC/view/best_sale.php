<?php 
include("../core/model/database.php") ;
$select_product = "select * from products where brand = 'Viglacera' limit 10 ;" ;
$result_product = $connect->query($select_product);
if($result_product->num_rows > 0 ){
    while($row = $result_product->fetch_assoc()){
        ?>
           <div class="item position-relative">
           <div class="card h-100">
                <a href="../view/product-detail.php?product_id=<?php echo $row['product_id']; ?>"><img src="../assets/img/<?php echo $row['image']; ?>" class="card-img-top" height="100%" width="100%" alt="Laptop" /></a>
                <div class="card-body">
                  <div class="d-flex justify-content-between mb-3 flex-column">
                    <h6 class="mb-0 product-view"><?php echo $row['product_name']; ?></h6>
                    <h6 class="text-dark mb-0 product-view">Price: <?php echo $row['price']; ?>$</h6>
                  </div>

                  <div class="d-flex justify-content-between mb-2">
                    <p class="text-muted mb-0">Available: <span class="fw-bold"><?php echo $row['inventory']; ?></span></p>

                  </div>
                  <div class="d-flex justify-content-between mb-2">
                  <!-- <form action="../core/model/add_to_cart.php?product_id=<?php echo $row['product_id'] ; ?>" method="POST">
                            <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ; ?>">
                            <label for="quantity">Quantity : </label>
                            <input type="number" name="quantity" required>
                            <br>
                            <input type="submit" name="add_to_cart" value="Add">
                        </form> -->
                  </div>
                </div>
           </div> 
           </div>
        <?php
    }
}
?>