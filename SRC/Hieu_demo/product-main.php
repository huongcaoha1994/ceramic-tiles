   <?php
                      include("../core/model/database.php");
                      $item_per_page = 12;
                      $select_product = "select count(*) as total from products ;";
                      $result_total = $connect->query($select_product);
                      if ($result_total->num_rows > 0) {
                        $row = $result_total->fetch_assoc();
                        $total_product = $row['total'];
                      }
                      $total_page = ceil($total_product / $item_per_page);
                      $current_page = (isset($_GET['page'])) ? $_GET['page'] : 1;
                      $current_page = max(1, min($current_page, $total_page));
                      $start = ($current_page - 1) * $item_per_page + 1;
                      $get_product = "select * from products limit $start,$item_per_page ;";
                      $result_product = $connect->query($get_product);
                      if ($result_product->num_rows > 0) {
                      ?>
                      
                          <?php
                          $count = 0;
                          while ($row = $result_product->fetch_assoc()) {
                          ?>

                            <div class="col-6 col-lg-3 my-2">
                              <div class="card h-100">
                                <img src="../assets/img<?php echo $row['image']; ?>" class="card-img-top" height="150px" width="150px" alt="Laptop" />
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
                          ?>
             
          <?php
                      }
          ?>
          <?php
          for ($i = 1; $i <= $total_page; $i++) {
            echo "<a href='main.php?page=$i'> $i          </a>";
          }
          ?>