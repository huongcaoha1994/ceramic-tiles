<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    function get_color(color) {
      $.ajax({
        url: "filter-color.php",
        type: "POST",
        data: { color: color },
        success: function(response) {
          $("#color").html(response); // Cập nhật nội dung danh sách sản phẩm
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.error("Error:", textStatus, errorThrown);
        }
      });
    }

    function get_brand(brand) {
      $.ajax({
        url: "filter-color.php",
        type: "POST",
        data: { brand: brand },
        success: function(response) {
          $("#brand").html(response); // Cập nhật nội dung danh sách sản phẩm
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.error("Error:", textStatus, errorThrown);
        }
      });
    }

    function get_size(size) {
      $.ajax({
        url: "filter-color.php",
        type: "POST",
        data: { size: size },
        success: function(response) {
          $("#brand").html(response); // Cập nhật nội dung danh sách sản phẩm
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
        <div class="col-12 rounded-1 " style="background:url(../assets/img/homepage/banner-1.jpg);" >
            <h1 class="text-center text-primary">Store</h1>
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
                <!-- checkbox color -->
                <h5>Colors</h5>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="color" id="flexRadioDefault1" onclick="get_color('yellow')">
                    <label class="form-check-label" for="flexRadioDefault1">
                       Yellow
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="color" id="flexRadioDefault2" checked onclick="get_color('red')">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Red
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="color" id="flexRadioDefault1" onclick="get_color('black')">
                    <label class="form-check-label" for="flexRadioDefault1">
                       Black
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="color" id="flexRadioDefault1" onclick="get_color('white')">
                    <label class="form-check-label" for="flexRadioDefault1">
                       White
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="color" id="flexRadioDefault1" onclick="get_color('pink')">
                    <label class="form-check-label" for="flexRadioDefault1">
                       Pink
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="color" id="flexRadioDefault1" onclick="get_color('orange')">
                    <label class="form-check-label" for="flexRadioDefault1">
                       Orange
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="color" id="flexRadioDefault1" onclick="get_color('brown')">
                    <label class="form-check-label" for="flexRadioDefault1">
                       Brown
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="color" id="flexRadioDefault1" onclick="get_color('')">
                    <label class="form-check-label" for="flexRadioDefault1">
                       Tất cả
                    </label>
                </div>
                <!-- checkbox brand -->
                <h5>Brand</h5>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="brand" id="flexRadioDefault1" onclick="get_brand('Viglacera')">
                    <label class="form-check-label" for="flexRadioDefault1">
                    Viglacera
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="brand" id="flexRadioDefault2" checked onclick="get_brand('Viglacera Platinum')">
                    <label class="form-check-label" for="flexRadioDefault2">
                    Viglacera Platinum
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="brand" id="flexRadioDefault1" onclick="get_brand('Chinese Tiles')">
                    <label class="form-check-label" for="flexRadioDefault1">
                    Chinese Tiles
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="brand" id="flexRadioDefault1" onclick="get_brand('Bach Ma Tiles')">
                    <label class="form-check-label" for="flexRadioDefault1">
                    Bach Ma Tiles
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="brand" id="flexRadioDefault1" onclick="get_brand('Dong Tam Brick')">
                    <label class="form-check-label" for="flexRadioDefault1">
                    Dong Tam Brick
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="brand" id="flexRadioDefault1" onclick="get_brand('Eurotile')">
                    <label class="form-check-label" for="flexRadioDefault1">
                    Eurotile
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="brand" id="flexRadioDefault1" onclick="get_brand('')">
                    <label class="form-check-label" for="flexRadioDefault1">
                       Tất cả
                    </label>
                </div>

                <!-- checkbox size -->
                <h5>Size</h5>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="size" id="flexRadioDefault1" onclick="get_size('40x40')">
                    <label class="form-check-label" for="flexRadioDefault1">
                    40x40
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="size" id="flexRadioDefault2" checked onclick="get_size('40x80')">
                    <label class="form-check-label" for="flexRadioDefault2">
                    40x80
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="size" id="flexRadioDefault1" onclick="get_size('25x40')">
                    <label class="form-check-label" for="flexRadioDefault1">
                    25x40
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="size" id="flexRadioDefault1" onclick="get_size('60x60')">
                    <label class="form-check-label" for="flexRadioDefault1">
                    60x60
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="size" id="flexRadioDefault1" onclick="get_size('80x80')">
                    <label class="form-check-label" for="flexRadioDefault1">
                    80x80
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="size" id="flexRadioDefault1" onclick="get_size('30x90')">
                    <label class="form-check-label" for="flexRadioDefault1">
                    30x90
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="size" id="flexRadioDefault1" onclick="get_size('30x60')">
                    <label class="form-check-label" for="flexRadioDefault1">
                    30x60
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="size" id="flexRadioDefault1" onclick="get_size('')">
                    <label class="form-check-label" for="flexRadioDefault1">
                       Tất cả
                    </label>
                </div>

            </div>



            <div class="col-12 col-lg-9">
                <div class="row">
                    <div id="color">
                    <?php
                   if(isset($_SESSION['color']) || isset($_SESSION['band']) || isset($_SESSION['size']) ){
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
    </div>

        <?php
        include("footer.php");
        ?>
</body>

</html>