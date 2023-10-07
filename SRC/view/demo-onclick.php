<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
   
    function category_main(category) {
      $.ajax({
        url: "product-main.php",
        type: "POST",
        data: { category: category },
        success: function(response) {
          $("#category").html(response); // Cập nhật nội dung danh sách sản phẩm
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.error("Error:", textStatus, errorThrown);
        }
      });
    }
  </script>
</head>
<body>
<div class="hn-tabs justify-content-around">
            <div class="hn-tab-item active">
              <button name="category" onclick="category_main('wall')">Wall Ceramic Tiles</button>

            </div>

            <div class="hn-tab-item">

              <button name="category" onclick="category_main('floor')">Floor Ceramic Tiles</button>

            </div>

            <div class="hn-tab-item">

              <button name="category" onclick="category_main('special')">Special Ceramic Tiles</button>


            </div>
            <div class="line d-none"></div>
          </div>
          <button name="category" onclick="category_main('wall')">Wall Ceramic Tiles</button>
          <button name="category" onclick="category_main('floor')">Floor Ceramic Tiles</button>
          <button name="category" onclick="category_main('special')">Special Ceramic Tiles</button>

          <h1>Danh sách sản phẩm</h1>

          <div class="hn-tab-content">
            <div class="hn-tab-pane active">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <div class="row">
                      <div id="category">

                      <?php
                      include("product-main.php");
                      ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

</body>
</html>