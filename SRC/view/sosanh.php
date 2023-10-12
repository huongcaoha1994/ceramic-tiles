<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #compare {
            display: flex;
        }
        #title {
            display: flex;
            margin-left: 5%;
            }
            h1 {
            margin-right: 35%;
        }
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
            $('#search1994').on('input', function() {
                var searchTerm = $(this).val();
                if (searchTerm.length >= 3) {
                    $.ajax({
                        url: 'demo-search.php',
                        method: 'POST',
                        data: { search1994: searchTerm },
                        success: function(response) {
                            $('#search-results1994').html(response);
                        }
                    });
                } else {
                    $('#search-results1994').empty();
                }
            });
        });

        $(document).ready(function() {
            // Gửi yêu cầu tìm kiếm khi người dùng nhập từ khóa
            $('#search1995').on('input', function() {
                var searchTerm = $(this).val();
                if (searchTerm.length >= 3) {
                    $.ajax({
                        url: 'demo-search.php',
                        method: 'POST',
                        data: { search1995: searchTerm },
                        success: function(response) {
                            $('#search-results1995').html(response);
                        }
                    });
                } else {
                    $('#search-results1995').empty();
                }
            });
        });
    </script>
</head>
<body>
    <?php
    include("header.php");
    ?>
    <!-- Form tìm kiếm sản phẩm -->
    <div id="compare">

        <form>
            <label for="search1994">Chọn sản phẩm 1 :</label>
            <input type="text" id="search1994" placeholder="Nhập tên sản phẩm">
        </form>
        <br><br><br><br><br><br>
        <form>
            <label for="search1995">Chọn sản phẩm 2 :</label>
            <input type="text" id="search1995" placeholder="Nhập tên sản phẩm">
        </form>
    </div>

<!-- Kết quả tìm kiếm -->

<div id="search-results1994">
        
</div>

<div id="search-results1995">
        
</div>

        <div id="title">
            <h1>Product 1</h1>
            <h1>VS</h1>
            <h1>Product 2</h1>
        </div>
    <?php 
    
    // session_start();
    // unset($_SESSION['sp1']);
    // unset($_SESSION['sp2']) ;
    include("../core/model/database.php") ;
      if(isset($_GET['sp1'])){
          $_SESSION['sp1'] = $_GET['sp1'] ; 
      }
      else if (isset($_GET['sp2'])){
        $_SESSION['sp2'] = $_GET['sp2'] ; 
    }
    ?>
    
    <div id="container">
        <?php 
       
        if(isset($_SESSION['sp1']) && $_SESSION['sp1'] > 0 ){
            $sp1 = $_SESSION['sp1'];
            $select_sp1 = "select * from products where product_id = $sp1 ;" ;
            $result_sp1 = $connect->query($select_sp1);
            if($result_sp1->num_rows > 0 ){
                $row = $result_sp1->fetch_assoc();
                ?>
                    <div>
                       
                        <img src="../assets/img/<?php echo $row['image']; ?>" alt="" width="300" height="300">
                        <h3><?php echo $row['product_name']; ?></h3>
                        <h4>Price : <?php echo $row['price']; ?></h4>
                        <h4>Brand : <?php echo $row['brand']; ?></h4>
                        <h4>Color : <?php echo $row['color']; ?></h4>
                        <h4>Size : <?php echo $row['size']; ?></h4>
                        <p>Description : <?php echo $row['description']; ?></p>
                        <form action="sosanh.php" method="POST">
                            <input type="submit" name="delete1" value="Delete">
                        </form>
                    </div>
                <?php
                
            }
        }
        ?>

 <?php 
       
        if(isset($_SESSION['sp2']) && $_SESSION['sp2'] > 0 ){
            $sp2 = $_SESSION['sp2'];
            $select_sp2 = "select * from products where product_id = $sp2 ;" ;
            $result_sp2 = $connect->query($select_sp2);
            if($result_sp2->num_rows > 0 ){
                $row = $result_sp2->fetch_assoc();
                ?>
                    <div>
                      
                        <img src="../assets/img/<?php echo $row['image']; ?>" alt="" width="300" height="300">
                        <h3><?php echo $row['product_name']; ?></h3>
                        <h4>Price : <?php echo $row['price']; ?></h4>
                        <h4>Brand : <?php echo $row['brand']; ?></h4>
                        <h4>Color : <?php echo $row['color']; ?></h4>
                        <h4>Size : <?php echo $row['size']; ?></h4>
                        <p>Description : <?php echo $row['description']; ?></p>
                        <form action="sosanh.php" method="POST">
                            <input type="submit" name="delete2" value="Delete">
                        </form>
                    </div>
                <?php
            }
        }
        ?>
    </div>
  
    <?php 
   
    if(isset($_POST['delete1'])){
       $_SESSION['sp1'] = 0 ;
        // header("location: sosanh.php");
       
        
    }
    else if(isset($_POST['delete2'])){
        $_SESSION['sp2'] = 0 ;
        // header("location: sosanh.php");
       
    }
    ?> 

    <?php 
    include("footer.php");
    ?>
</body>
</html>