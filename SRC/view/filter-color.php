<?php
session_start();
include("../core/model/database.php");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $_SESSION['color'] = $_POST["color"];
  $color = $_SESSION['color'] ;
    $select_filter = "select * from products where color = '$color' ;" ;
    $result_filter = $connect->query($select_filter);
    if($result_filter->num_rows > 0 ) {
      while($row = $result_filter->fetch_assoc()){
        ?>
          <div>
            <img src="../assets/img<?php echo $row['image']; ?>" alt="">
            <h3><?php echo $row['product_name']; ?></h3>
            <h4><?php echo $row['price']; ?></h4>
            <h4><?php echo $row['brand']; ?></h4>
            <h4><?php echo $row['size']; ?></h4>
            <h4><?php echo $row['color']; ?></h4>
          </div>
        <?php
      }
    }
    else {
      echo "không tìm thấy sản phẩm nào !" ;
    }

}

?>