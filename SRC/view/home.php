<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between; /* Căn các div theo khoảng cách bằng nhau */
        }

        .container > div {
            width: calc(25% - 20px); /* Sử dụng 25% chiều rộng để có tối đa 4 thẻ div trên một hàng */
            box-sizing: border-box;
            padding: 10px;
            margin-bottom: 20px; /* Khoảng cách giữa các div */
        }
    </style>
</head>
<body>
    <h1>Danh sách sản phẩm</h1>
    <?php 
    include("../Model/database.php");
    $item_per_page = 12 ;
    $select_product = "select count(*) as total from products ;" ;
    $result_total = $connect->query($select_product) ;
    if($result_total->num_rows > 0 ){
        $row = $result_total->fetch_assoc();
        $total_product = $row['total'] ;
    }
    $total_page = ceil($total_product / $item_per_page) ;
    $current_page = (isset($_GET['page'])) ? $_GET['page'] : 1 ;
    $current_page = max(1,min($current_page,$total_page));
    $start = ($current_page - 1 ) * $item_per_page + 1 ;
    $get_product = "select * from products limit $start,$item_per_page ;" ;
    $result_product = $connect->query($get_product);
    if($result_product->num_rows > 0) {
        ?>
        <div class="container">
        <?php
        $count = 0;
        while($row = $result_product->fetch_assoc()){
            ?>
            <div>
                <img src="<?php echo $row['image']; ?>" alt="" width="300" height="300">
                <h3><?php echo $row['product_name']; ?></h3>
                <h4>Price: <?php echo $row['price']; ?></h4>
                <h4>Color: <?php echo $row['color']; ?>| Inventory: <?php echo $row['inventory']; ?></h4>
                <h4><?php echo $row['brand']; ?></h4>
                <h4><?php echo $row['size']; ?>cm</h4>
            </div>
            <?php
            $count++;
            if($count % 4 == 0) {
                echo '</div><div class="container">'; /* Đóng container và mở container mới sau khi hiển thị 4 div */
            }
        }
        ?>
        </div>
        <?php
    }
    ?>
    <?php 
     for($i = 1 ; $i <= $total_page ; $i++){
        echo "<a href='home.php?page=$i'> $i          </a>";
    }
    ?>
    
</body>
</html>