<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
   
    function filter_color(color) {
      $.ajax({
        url: "filter-color.php",
        type: "POST",
        data: { color: color },
        success: function(response) {
          $("#filter").html(response); // Cập nhật nội dung danh sách sản phẩm
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.error("Error:", textStatus, errorThrown);
        }
      });
    }

    function filter_brand(brand) {
      $.ajax({
        url: "filter-color.php",
        type: "POST",
        data: { brand: brand },
        success: function(response) {
          $("#filter").html(response); // Cập nhật nội dung danh sách sản phẩm
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.error("Error:", textStatus, errorThrown);
        }
      });
    }

    function filter_size(size) {
      $.ajax({
        url: "filter-color.php",
        type: "POST",
        data: { size: size },
        success: function(response) {
          $("#filter").html(response); // Cập nhật nội dung danh sách sản phẩm
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.error("Error:", textStatus, errorThrown);
        }
      });
    }
  </script>
</head>
<body>
    <h2>color</h2>
    <label for="color">black</label>
    <input type="radio" name="color" value="black" onclick="filter_color('black')">
    <br>
    <label for="color">white</label>
    <input type="radio" name="color" value="white" onclick="filter_color('white')">
    <br>
    <!-- <label for="color">All</label>
    <input type="radio" name="color" value="" onclick="filter_color('')">
    <br> -->

    <h2>brand</h2>
    <label for="brand">Viglacera</label>
    <input type="radio" name="brand" value="Viglacera" onclick="filter_brand('Viglacera')">
    <br>
    <label for="brand">Bach Ma Tiles</label>
    <input type="radio" name="brand" value="Bach Ma Tiles" onclick="filter_brand('Bach Ma Tiles')">
    <br>
    <!-- <label for="brand">All</label>
    <input type="radio" name="brand" value="" onclick="filter_brand('')">
    <br> -->

    <h2>size</h2>
    <label for="size">60x60</label>
    <input type="radio" name="size" value="60x60" onclick="filter_size('60x60')">
    <br>
    <label for="size">80x80</label>
    <input type="radio" name="size" value="80x80" onclick="filter_size('80x80')">
    <br>
    <!-- <label for="size">white</label>
    <input type="radio" name="size" value="" onclick="filter_size('')">
    <br> -->

    <div id="filter">

    <?php 
  
    include("filter-color.php");
    ?>
    </div>
</body>
</html>