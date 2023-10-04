<?php 
include("../core/model/database.php") ;

if(isset($_GET['category'])){
    $select_product ;
    $category = $_GET['category'] ;
    if($category == "wall"){
        $select_product = "select * from products where category_id = 1 and category_id = 2 and
        category_id = 3 and category_id = 4 and category_id = 5 and category_id = 6 and category_id = 7 ;";
    }
    else if ($category == "floor"){
        $select_product = "select * from products where category_id = 8 and category_id = 2 and
        category_id = 3 and category_id = 4 and category_id = 5 and category_id = 6 and category_id = 7 ;";
    }
    else if ($category == "special"){
        $select_product = "select * from products where category_id = 9 and category_id = 2 and
        category_id = 3 and category_id = 4 and category_id = 5 and category_id = 6 and category_id = 7 ;";
    }
   
}
else {
    $select_product ;
    if(isset($_POST['search'])){
        $rs_search = htmlspecialchars($_POST['rs_search']) ;
        $select_product = "SELECT * FROM products
        JOIN categories ON products.category_id = categories.category_id
        WHERE products.product_name LIKE '%$rs_search%' OR categories.category_name LIKE '%$rs_search%';" ;
    }
   
}
    if (!isset($_GET['category']) || !isset($_POST['search'])){
        $select_product = "select * from products ;" ;
    }
    $result_product = $connect->query($select_product);
    if($result_product->num_rows > 0 ){
        while($row = $result_product->fetch_assoc()){
            ?>
                 <div class="col-6 col-lg-3 my-2">
                              <div class="card h-100">
                                <img src="../assets/img<?php echo $row['image']; ?>" class="card-img-top" height="300px" width="300px" alt="Laptop" />
                                <div class="card-body">
                                  <div class="d-flex justify-content-between mb-3">
                                    <h6 class="mb-0 product-view"><?php echo $row['product_name']; ?></h6>
                                    <h6 class="text-dark mb-0 product-view"><?php echo $row['price']; ?></h6>
                                  </div>

                                  <div class="d-flex justify-content-between mb-2">
                                    <p class="text-muted mb-0">Available: <span class="fw-bold"><?php echo $row['inventory']; ?></span></p>

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