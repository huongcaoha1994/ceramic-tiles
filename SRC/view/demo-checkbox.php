<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tìm kiếm sản phẩm</title>
    <style>
        #container {
            display: flex;
        }
        .product {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        
        .product img {
            width: 100px;
            height: 100px;
            margin-right: 10px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Gửi yêu cầu tìm kiếm khi người dùng nhập từ khóa
            $('#search').on('input', function() {
                var searchTerm = $(this).val();
                if (searchTerm.length >= 3) {
                    $.ajax({
                        url: 'demo-search.php',
                        method: 'POST',
                        data: { search: searchTerm },
                        success: function(response) {
                            $('#search-results').html(response);
                        }
                    });
                } else {
                    $('#search-results').empty();
                }
            });
        });

        $(document).ready(function() {
            // Gửi yêu cầu tìm kiếm khi người dùng nhập từ khóa
            $('#search').on('input', function() {
                var searchTerm = $(this).val();
                if (searchTerm.length >= 3) {
                    $.ajax({
                        url: 'demo-search.php',
                        method: 'POST',
                        data: { search: searchTerm },
                        success: function(response) {
                            $('#search-results').html(response);
                        }
                    });
                } else {
                    $('#search-results').empty();
                }
            });
        });
    </script>
</head>
<body>
    <div id="container">
    <!-- Form tìm kiếm sản phẩm -->
    <form>
        <input type="text" id="search" placeholder="Nhập tên sản phẩm">
    </form>
    
    <!-- Kết quả tìm kiếm -->
    <div id="search-results"></div>

    <?php 
    include("../core/model/database.php") ;
      if(isset($_GET['product_id'])){
          $product_id = $_GET['product_id'] ;
          $get_product = "select * from products where product_id = $product_id ;" ;
          $rs_product = $connect->query($get_product);
          if($rs_product->num_rows > 0 ) {
            $row = $rs_product->fetch_assoc();
            ?>
                <div>
                    <img src="../assets/img<?php echo $row['image']; ?>" alt="" width="150" height="150">
                    <h3><?php echo $row['product_name']; ?></h3>
                    <h4><?php echo $row['price']; ?></h4>
                    <h4><?php echo $row['color']; ?></h4>
                    <h4><?php echo $row['brand']; ?></h4>
                    <h4><?php echo $row['size']; ?></h4>
                    <h4><?php echo $row['color']; ?></h4>
                    <p><?php echo $row['description']; ?></p>
                </div>
            <?php
          }
      }
    ?>  

<form>
        <input type="text" id="search" placeholder="Nhập tên sản phẩm">
    </form>
    
    <!-- Kết quả tìm kiếm -->
    <div id="search-results"></div>

    <?php 
    include("../core/model/database.php") ;
      if(isset($_GET['product_id'])){
          $product_id = $_GET['product_id'] ;
          $get_product = "select * from products where product_id = $product_id ;" ;
          $rs_product = $connect->query($get_product);
          if($rs_product->num_rows > 0 ) {
            $row = $rs_product->fetch_assoc();
            ?>
                <div>
                    <img src="../assets/img<?php echo $row['image']; ?>" alt="" width="150" height="150">
                    <h3><?php echo $row['product_name']; ?></h3>
                    <h4><?php echo $row['price']; ?></h4>
                    <h4><?php echo $row['color']; ?></h4>
                    <h4><?php echo $row['brand']; ?></h4>
                    <h4><?php echo $row['size']; ?></h4>
                    <h4><?php echo $row['color']; ?></h4>
                    <p><?php echo $row['description']; ?></p>
                </div>
            <?php
          }
      }
    ?>  
    </div>
</body>
</html>