<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    </script>
</head>
<body>
    <div id="search-results">
         <!-- Form tìm kiếm sản phẩm -->
    <form>
        <input type="text" id="search" placeholder="Nhập tên sản phẩm">
    </form>
    </div>
    <!-- Kết quả tìm kiếm -->
   
        
    


    <?php 
    session_start();
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
       
        if(isset($_SESSION['sp1'])){
            $sp1 = $_SESSION['sp1'];
            $select_sp1 = "select * from products where product_id = $sp1 ;" ;
            $result_sp1 = $connect->query($select_sp1);
            if($result_sp1->num_rows > 0 ){
                $row = $result_sp1->fetch_assoc();
                ?>
                    <div>
                        <h1>Product 1</h1>
                        <img src="../assets//img/<?php echo $row['image']; ?>" alt="" width="300" height="300">
                        <h3><?php echo $row['product_name']; ?></h3>
                        <h4>Price : <?php echo $row['price']; ?></h4>
                        <h4>Brand : <?php echo $row['brand']; ?></h4>
                        <h4>Color : <?php echo $row['color']; ?></h4>
                        <h4>Size : <?php echo $row['size']; ?></h4>
                        <p>Description : <?php echo $row['description']; ?></p>
                        <form action="" method="POST">
                            <input type="submit" name="delete1" value="Delete">
                        </form>
                    </div>
                <?php
                
            }
        }
        ?>

<?php 
       
        if(isset($_SESSION['sp2'])){
            $sp2 = $_SESSION['sp2'];
            $select_sp2 = "select * from products where product_id = $sp2 ;" ;
            $result_sp2 = $connect->query($select_sp2);
            if($result_sp2->num_rows > 0 ){
                $row = $result_sp2->fetch_assoc();
                ?>
                    <div>
                        <h1>Product 2</h1>
                        <img src="../assets//img/<?php echo $row['image']; ?>" alt="" width="300" height="300">
                        <h3><?php echo $row['product_name']; ?></h3>
                        <h4>Price : <?php echo $row['price']; ?></h4>
                        <h4>Brand : <?php echo $row['brand']; ?></h4>
                        <h4>Color : <?php echo $row['color']; ?></h4>
                        <h4>Size : <?php echo $row['size']; ?></h4>
                        <p>Description : <?php echo $row['description']; ?></p>
                        <form action="" method="POST">
                            <input type="submit" name="delete2" value="Delete">
                        </form>
                    </div>
                <?php
            }
        }
        ?>
    </div>
    </div>
    <?php 
   
    if(isset($_POST['delete1'])){
        unset($_SESSION['sp1']);
        header("sosanh.php");
        exit;
    }
    else if(isset($_POST['delete2'])){
        unset($_SESSION['sp2']);
        header("sosanh.php");
        exit;
    }
    ?>
</body>
</html>