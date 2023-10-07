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
          $("#color").html(response); // Cập nhật nội dung danh sách sản phẩm
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
            <h5>Colors</h5>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="color" id="flexRadioDefault1" onclick="filter-color('yellow')">
                <label class="form-check-label" for="flexRadioDefault1">
                    Yellow
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="color" id="flexRadioDefault2" onclick="filter-color('red')">
                <label class="form-check-label" for="flexRadioDefault2">
                    Red
                </label>
            </div>
        </div>

        <div class="col-12 col-lg-9">
            <div class="row">
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