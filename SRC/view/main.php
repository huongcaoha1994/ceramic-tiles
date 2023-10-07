
  <?php
  include("./header.php");
  ?>

  <!-- Banner  -->
  <img src="../assets/img/homepage/banner2.jpg" alt="" class="w-100" height="500px">
  <!-- category list  -->
  <div class="container">
    <div class="row">
      <div class="col d-flex justify-content-between align-items-center">
        <h1 class="text-primary py-4">Ceramic Tiles Categories</h1>
        <a href="shop.php" class="btn btn-primary">
          <i class="fa-solid fa-bag-shopping"></i>
          Go to store</a>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="owl-carousel owl-theme carousel-slider" >
      <div class="item">
        <div class="my-2 text-center">
          <div class="card h-100">
            <img src="../assets/img/homepage/wall.jpg" class="card-img-top" alt="wall-tiles" height="300px">
            <div class="card-body">
              <h5 class="card-title">Wall Ceramic Tiles</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="shop.php?category=allwall" class="btn btn-primary">Learn more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="my-2 text-center">
          <div class="card h-100">
            <img src="../assets/img/homepage/floor-ceramic-tile.jpg" class="card-img-top" alt="..." height="300px">
            <div class="card-body">
              <h5 class="card-title">Floor Ceramic Tiles</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="shop.php?category=allfloor" class="btn btn-primary">Learn more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="my-2 text-center">
          <div class="card h-100">
            <img src="../assets/img/homepage/special.jpg" class="card-img-top" alt="..." height="300px">
            <div class="card-body">
              <h5 class="card-title">Special Ceramic Tiles</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="shop.php?category=allspecial" class="btn btn-primary">Learn more</a>
            </div>

          </div>
        </div>
      </div>

    </div>
</div>

  <!-- Latest product  -->
  <section style="background-color: #eee;" class="py-2">
    <h1 class="text-primary text-center py-4">Our Latest Product</h1>
    <div class="container">
      <div class="row">
      <div class="owl-carousel owl-theme" >

             <?php 
             include("best_sale.php");
             ?>
      
      </div>
             
      </div>
    </div>
  </section>

  <!-- Double banner  -->
  <section class="container py-3 ">
    <div class="row">
      <div class="col-12 my-2 col-md-6 fade-in-left animation-element animate">
        <img src="../assets/img/homepage/small_banner1.jpg" alt="" class="rounded-2" width="100%" height="150px">
      </div>
      <div class="col-12 my-2 col-md-6 fade-in-right animation-element animate">
        <img src="../assets/img/homepage/small_banner2.jpg" alt="" class="rounded-2" width="100%" height="150px">
      </div>
    </div>
  </section>
  <!-- Tab items -->
  <section style="background-color: #eee;" class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-primary text-center py-4">Our Products</h1>

          <ul class="nav nav-pills mb-3 justify-content-around" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true" name="category" onclick="category_main('wall')">Wall Ceramic Tiles</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" name="category" onclick="category_main('floor')">Floor Ceramic Tiles</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false" name="category" onclick="category_main('special')">Special Ceramic Tiles</button>
            </li>
          </ul>
          <div class="tab-content " id="pills-tabContent">
          
          </div>
          <div class="row" id="category">
                 

                 <?php include("product-main.php"); ?>
              
             </div>
  </section>
  <!-- Blog post  -->
  <h1 class="text-primary text-center py-4">Blog Post</h1>
  <div class="container blog-post py-3">
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="d-flex position-relative">
          <img src="../assets/img/homepage/banner-1.jpg" class="flex-shrink-0 me-3" alt="..." width="150px" height="150px">
          <div>
            <h5 class="mt-0 text-truncate">Gạch Ceramic Là Gì? Phân Biệt Với Gạch Granite, Porcelain</h5>
            <p>Nhiều mẫu mã, họa tiết, màu sắc, giá thành phải chăng… gạch ceramic (gạch men) trở thành loại vật liệu ốp lát phổ biến hiện nay. Tuy nhiên, loại gạch này có tốt và bền chắc không, có những ưu nhược điểm gì thì không phải gia chủ nào cũng biết. Để hiểu rõ vấn đề này và tìm ra mẫu gạch ceramic đẹp cũng như phương pháp thi công nâng cao chất lượng cho bề mặt ốp lát, bạn hãy tham khảo bài viết dưới đây..</p>
            <a href="#" class="stretched-link btn btn-primary">Đọc thêm</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="d-flex position-relative">
          <img src="../assets/img/homepage/banner-1.jpg" class="flex-shrink-0 me-3" alt="..." width="150px" height="150px">
          <div>
            <h5 class="mt-0 text-truncate">Cách tính số lượng gạch cần sử dụng</h5>
            <p>Các hộ gia đình thường khá băn khoăn khi không biết nên mua số lượng gạch bao nhiêu cho không bị thừa hay thiếu khi đưa vào thi công. Để đảm bảo tiết kiệm chi phí cho công trình và không bị gián đoán quá trình thi công, hay tham khảo bài viết dưới đây để xác định được số lượng gạch cần mua chính xác nhất nhé!
            </p> <a href="#" class="stretched-link btn btn-primary">Đọc thêm</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  include('./footer.php');
  ?>
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