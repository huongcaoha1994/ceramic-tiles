<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #pagination a{
            text-decoration: none;
            font-size: 20px;
        }
        #pagination a:hover {
            color: black;
        }
    </style>
    
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
<?php
include("header.php");
?>
<!-- breadcrumb -->
<div class="container py-3 d-none d-md-block">
    <div class="row align-items-center">
        <div class="col-12 rounded-1 " style="background:url(../assets/img/homepage/banner-1.jpg);">
            <h1 class="text-center text-light">Store</h1>
        </div>
    </div>
</div>
<div class="container py-3">
    <div class="row">
        <div class="col-12 text-center text-md-start col-md-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-3 mb-md-0 justify-content-center justify-content-md-start">
                    <li class="breadcrumb-item"><a href="#" class="fs-6">Home</a></li>
                    <li class="breadcrumb-item active fs-6" aria-current="page">Shop</li>
                </ol>
            </nav>
        </div>
        <div class="col-12 col-md-4">
            <h1 class="text-center d-md-none">Store</h1>
        </div>
        <div class="col-12 text-center text-md-end col-md-4">
            <form action="shop.php" method="POST" class="d-flex">
                <input type="text" name="rs_search" class="form-control rounded">
                <input type="submit" name="search" value="search" class="btn btn-outline-primary">
            </form>

        </div>
    </div>
</div>
<!-- Heading -->

<!-- Main content -->
<div class="container">
    <div class="row">
        <div class="d-none col-lg-3 d-lg-block border rounded-1 p-3">
            <h4>Bộ lọc sản phẩm</h4>
            <h2>color</h2>
    <label for="color">black</label>
    <input type="radio" name="color" value="black" onclick="filter_color('black')">
    <br>
    <label for="color">white</label>
    <input type="radio" name="color" value="white" onclick="filter_color('white')">
    <br>
    <label for="color">yellow</label>
    <input type="radio" name="color" value="yellow" onclick="filter_color('yellow')">
    <br>
    <label for="color">orange</label>
    <input type="radio" name="color" value="orange" onclick="filter_color('orange')">
    <br>
    <label for="color">red</label>
    <input type="radio" name="color" value="red" onclick="filter_color('red')">
    <br>
    <label for="color">brown</label>
    <input type="radio" name="color" value="brown" onclick="filter_color('brown')">
    <br>
    <label for="color">pink</label>
    <input type="radio" name="color" value="pink" onclick="filter_color('pink')">
    <br>
    <label for="color">All</label>
    <input type="radio" name="color" value="" onclick="filter_color('')">
    <br>

    <h2>brand</h2>
    <label for="brand">Viglacera</label>
    <input type="radio" name="brand" value="Viglacera" onclick="filter_brand('Viglacera')">
    <br>
    <label for="brand">Bach Ma Tiles</label>
    <input type="radio" name="brand" value="Bach Ma Tiles" onclick="filter_brand('Bach Ma Tiles')">
    <br>
    <label for="brand">Chinese Tiles</label>
    <input type="radio" name="brand" value="Chinese Tiles" onclick="filter_brand('Chinese Tiles')">
    <br>
    <label for="brand">Dong Tam Brick</label>
    <input type="radio" name="brand" value="Dong Tam Brick" onclick="filter_brand('Dong Tam Brick')">
    <br>
    <label for="brand">Eurotile</label>
    <input type="radio" name="brand" value="Eurotile" onclick="filter_brand('Eurotile')">
    <br>
    <label for="brand">All</label>
    <input type="radio" name="brand" value="" onclick="filter_brand('')">
    <br>

    <h2>size</h2>
    <label for="size">60x60</label>
    <input type="radio" name="size" value="60x60" onclick="filter_size('60x60')">
    <br>
    <label for="size">80x80</label>
    <input type="radio" name="size" value="80x80" onclick="filter_size('80x80')">
    <br>
    <label for="size">45x45</label>
    <input type="radio" name="size" value="45x45" onclick="filter_size('45x45')">
    <br>
    <label for="size">40x80</label>
    <input type="radio" name="size" value="40x80" onclick="filter_size('40x80')">
    <br>
    <label for="size">40x40</label>
    <input type="radio" name="size" value="40x40" onclick="filter_size('40x40')">
    <br>
    <label for="size">25x40</label>
    <input type="radio" name="size" value="25x40" onclick="filter_size('25x40')">
    <br>
    <label for="size">30x60</label>
    <input type="radio" name="size" value="30x60" onclick="filter_size('30x60')">
    <br>
    <label for="size">30x90</label>
    <input type="radio" name="size" value="30x90" onclick="filter_size('30x90')">
    <br>
    <label for="size">All</label>
    <input type="radio" name="size" value="" onclick="filter_size('')">
    <br>

        </div>

        <div class="col-12 col-lg-9">
            <div class="row" id="filter">
                <?php
               if(isset($_SESSION['color']) || isset($_SESSION['brand']) || isset($_SESSION['size'])){
                include("filter-color.php");
               }
               else {
                include("search.php");
               }
                ?>
            </div>
        </div>
    </div>
</div>

<?php
include("footer.php");
?>
</body>
</html>
