<?php
// session_start() ;
include("./header.php");
?>

<!-- Banner  -->
<img src="../assets/img/homepage/banner.png" alt="banner" class="w-100 img-background">
<!-- Why Choose Us -->
<div class="container py-3">
  <div class="row">
    <div class="col-md-6 text-center text-md-start fade-in-left">
      <h1 class="text-primary">Why Choose Us</h1>
      <p>Choosing Cera Tile means selecting a partner committed to excellence in ceramic tiles. Our dedication to quality, variety, and customer satisfaction sets us apart.</p>
      <br>
      <p>First and foremost, quality is our hallmark. We source our ceramic tiles from trusted manufacturers renowned for their craftsmanship and durability. You can trust that every tile from Cera Tile is built to withstand the test of time.</p>
      <br>
      <p>Variety is the spice of design, and we offer a vast selection of styles, colors, and textures to cater to your unique vision. Whether it's a chic urban space or a cozy home, our tiles are versatile and ready to transform any environment.</p>
      <br>
      <p>With Cera Tile, you're not just choosing ceramic tiles; you're choosing a commitment to quality, a world of design possibilities, and a partner dedicated to bringing your vision to life.</p>
    </div>
    <div class="d-none d-md-block col-md-6 fade-in-right">
      <img src="../assets/img/homepage/grazia.jpg" alt="" srcset="" class="rounded-1">
    </div>
  </div>
</div>
<!-- Our Customer -->
<section style="background-color: #eee;" class="py-3">
  <h1 class="text-primary text-center">What we have</h1>
  <div class="container">
    <div class="row">
      <div class="col-6 col-md-3 ">
        <div class="iconbox border rounded-1 text-center set-equal my-2">
          <div class="icon-box-img">
            <img src="../assets/img/homepage/happy.svg" alt="">
          </div>
          <div class="icon-box-text">
            <h3>999+</h3>
            <p>Customers use it</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3 iconbox">
        <div class="iconbox border rounded-1 text-center set-equal my-2">
          <div class="icon-box-img">
            <img src="../assets/img/homepage/shipping.svg" alt="">
          </div>
          <div class="icon-box-text">
            <h3>Freeship</h3>
            <p>For total values >= 1000$</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3   iconbox">
        <div class="iconbox border rounded-1 text-center set-equal my-2">
          <div class="icon-box-img">
            <img src="../assets/img/homepage/tile.svg" alt="">
          </div>
          <div class="icon-box-text">
            <h3>999+</h3>
            <p>Variations tiles</p>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3   iconbox">
        <div class="iconbox border rounded-1 text-center set-equal my-2">
          <div class="icon-box-img">
            <img src="../assets/img/homepage/saving.svg" alt="">
          </div>
          <div class="icon-box-text">
            <h3>999+$</h3>
            <p>Money Saving</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
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
  <div class="owl-carousel owl-theme carousel-slider">
    <div class="item">
      <div class="my-2 text-center">
        <div class="categories-items position-relative">
          <img src="../assets/img/homepage/wall.jpg" class="categories-img rounded-1" alt="wall-tiles" height="300px">
          <div class="d-none categories-img-body position-absolute rounded-1">
            <div class="categories-content">
              <h5 class="text-primary">Wall Ceramic Tiles</h5>
              <p class="">Wall ceramic tiles enhance interior aesthetics with durability and versatile design options. They're easy to clean, ideal for kitchens, bathrooms, and more.</p>
              <a href="shop.php?category=allwall" class="btn btn-primary">Learn more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="my-2 text-center">
        <div class="categories-items position-relative">
          <img src="../assets/img/homepage/floor-ceramic-tile.jpg" class="categories-img rounded-1" alt="wall-tiles" height="300px">
          <div class="d-none categories-img-body position-absolute rounded-1">
            <div class="categories-content">
              <h5 class="text-primary">Floor Ceramic Tiles</h5>
              <p class="">Floor ceramic tiles are durable and easy to maintain. They come in various designs, suitable for any interior. Ideal for high-traffic and moisture-prone areas like kitchens and bathrooms.</p>
              <a href="shop.php?category=allfloor" class="btn btn-primary">Learn more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="my-2 text-center">
        <div class="categories-items position-relative">
          <img src="../assets/img/homepage/special.jpg" class="categories-img rounded-1" alt="wall-tiles" height="300px">
          <div class="d-none categories-img-body position-absolute rounded-1">
            <div class="categories-content">
              <h5 class="text-primary">Special Ceramic Tiles</h5>
              <p class="">Special ceramic tiles offer endless design possibilities with unique shapes, sizes, and finishes. Perfect for creative projects and adding a distinctive touch to your space.</p>
              <a href="shop.php?category=allspecial" class="btn btn-primary">Learn more</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- Latest product  -->
<section style="background-color: #eee;" class="py-2">
  <h1 class="text-primary text-center py-4 heading-section position-relative">Our Latest Product</h1>
  <div class="container">
    <div class="row">
      <div class="owl-carousel owl-theme">

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
      <a href="https://www.canva.com/design/DAFxI2DMw7I/DOMNh-qwjVs0hjdxzmMR8Q/view?utm_content=DAFxI2DMw7I&utm_campaign=designshare&utm_medium=link&utm_source=publishsharelink&mode=preview">
        <img src="../assets/img/homepage/small_banner1.jpg" alt="" class="rounded-2" width="100%" height="150px" style="object-fit: cover; object-position:center;">
      </a>
    </div>
    <div class="col-12 my-2 col-md-6 fade-in-right animation-element animate">
      <a href="./expertcorner.php">
        <img src="../assets/img/homepage/small_banner2.jpg" alt="" class="rounded-2" width="100%" height="150px" style="object-fit: cover; object-position:top;">
      </a>
    </div>
  </div>
</section>
<!-- Tab items -->
<section style="background-color: #eee;" class="py-2">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-primary text-center py-4 heading-section position-relative">Our Products</h1>

        <ul class="nav nav-pills mb-3 justify-content-around d-sm-flex flex-nowrap" id="pills-tab" role="tablist">
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
<div class="container mb-2">
  <h1 class="text-primary text-center py-4 heading-section position-relative">Blog Post</h1>
  <div class="owl-carousel owl-theme blog-slider">
    <?php
      include("show_blog.php");
    ?>
    
  </div>
</div>

<?php
include('./footer.php');
?>