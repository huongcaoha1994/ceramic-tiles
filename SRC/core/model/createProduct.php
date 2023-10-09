<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/register.css">
    <title>Create Froduct</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
    .sidenav {
      background-color: rgb(145, 107, 235);
      height: 100%;
    }

    .input-group i {
  position: absolute;
  top: 50%;
  right: 5px;
  transform: translateY(50%);
  cursor: pointer;
  }


    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
    </style>
  </head>
  <body>
  <!-- demo bootstrap vào form -->
    <div class="container-fluid vh-100">
      <div class="row content">
        <div class="col-sm-2 sidenav vh-100">
          <div class="row">
            <div class="col-md-9 col-lg-4 col-xl-2">
            <a href="#" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
              <img src="../../assets/img/homepage/logo.png" alt="" height="50">
            </a>
          </div>
          </div>
          <div class="row">
            <ul class="nav col col-md-auto mb-2 d-flex justify-content-center flex-column mb-md-0">
              <li><a href="#" class="nav-link px-2 text-dark text-align-center">Home</a></li>
              <li><a href="#" class="nav-link px-2 text-dark">Features</a></li>
              <li><a href="#" class="nav-link px-2 text-dark">Pricing</a></li>
              <li><a href="#" class="nav-link px-2 text-dark">FAQs</a></li>
              <li><a href="#" class="nav-link px-2 text-dark">About</a></li>
            </ul>
          </div>
          
        </div>
        <div class="col-sm-10">
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          <div class="row " style="margin-top: 130px;">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
              <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                <div class="row align-items-center">
                  <div class="col-12 ">
                    <h2 class="tm-block-title d-inline-block text-align-center">Add Product</h2>
                  </div>
                </div>
                <form action="" method="POST">
                  <div class="row tm-edit-product-row">
                  <div class="col-xl-4 col-lg-6 col-md-12">
                    <form class="tm-edit-product-form">
                      <div class="form-group mb-3">
                        <label for="name">Product Name
                        </label>
                        <input id="name" name="product_name" type="text" class="form-control validate" required="">
                      </div>
                      <div class="form-group mb-3">
                        <label for="description">Description</label>
                        <textarea class="form-control validate" rows="3" required=""></textarea>
                      </div>
                      <div class="form-group mb-3">
                        <label for="color" class="form-label">Color</label>
                        <select class="form-control" id="color" name="color">
                        <option value="white">White</option>
                        <option value="black">Black</option>
                        <option value="yellow">Yellow</option>
                        <option value="red">Red</option>
                        <option value="orange">Orange</option>
                        <option value="pink">Pink</option>
                        <option value="brown">Brown</option>
                        </select>   
                      </div>
                      <div class="row">
                          <div class="form-group mb-3 col-xs-12 col-sm-6">
                              <label for="price">Price
                              </label>
                              <input id="price" name="price" type="number" class="form-control validate hasDatepicker">
                            </div>
                            <div class="form-group mb-3 col-xs-12 col-sm-6">
                              <label for="inventory">Inventory
                              </label>
                              <input id="inventory" name="inventory" type="number" class="form-control validate" required="">
                            </div>
                      </div>
                    </form>
                  </div>

                  <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                    <div class="form-group mb-3 col-xs-12 col-sm-6">
                      <label for="brand">Brand
                      </label>
                      <input id="brand" name="brand" type="text" class="form-control validate" required="">
                    </div>
                    <div class="form-group mb-3 col-xs-12 col-sm-6">
                      <label for="size">Size
                      </label>
                      <input id="size" name="size" type="text" class="form-control validate" required="">
                    </div>
                    <div class="form-group mb-3">
                      <label for="category" class="form-label">Style</label>
                      <select class="form-control" id="category" name="category">
                      <option value="1">Wall Tiles</option>
                      <option value="2">Bathroom Wall Tiles</option>
                      <option value="3">Kitchen Wall Tiles</option>
                      <option value="4">Outdoor Wall Tiles</option>
                      <option value="5">Living Room</option>
                      <option value="6">Bedroom</option>
                      <option value="7">Commercial Spaces Tiles</option>
                      <option value="8">Floor Tiles</option>
                      <option value="9">Special Tiles</option>
                      </select>
                    </div>
                    <div class="tm-product-img-dummy mx-auto">
                      <i class="" onclick="document.getElementById('fileInput').click();"></i>
                    </div>
                    <div class="custom-file mt-3 mb-3">
                      <input id="fileInput" type="file" style="display:none;">
                      <input type="button" class="btn btn-warning btn-block mx-auto" value="UPLOAD PRODUCT IMAGE" onclick="document.getElementById('fileInput').click();">
                    </div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-warning btn-block text-uppercase">Add Product Now</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div> 
      </div>
      <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-secondary">
        <div class="text-white mb-3 mb-md-0">
          Ok Bro © 2023. Cera Tiles.
        </div>
        <div>
          <a href="#!" class="text-white me-4 text-decoration-none">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#!" class="text-white me-4 text-decoration-none">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#!" class="text-white me-4 text-decoration-none">
            <i class="fab fa-google"></i>
          </a>
          <a href="#!" class="text-white text-decoration-none">
            <i class="fab fa-linkedin-in"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- xử lý dữ liệu từ form gửi đến -->
    <?php 
    //include("database.php");
    if(isset($_POST['create_product'])){
        function clean_data($data){
            $data = trim($data) ;
            $data = htmlspecialchars($data);
            return $data ;
        }
        $product_name = clean_data($_POST['product_name']) ;
        $price = clean_data($_POST['price']) ;
        $color = clean_data($_POST['color']) ;
        $inventory = clean_data($_POST['inventory']) ;
        $category = clean_data($_POST['category']) ;
        $brand = clean_data($_POST['brand']) ;
        $size = clean_data($_POST['size']) ;
        $description = clean_data($_POST['description']) ;
        // xử lý hình ảnh và lưu ảnh vào foder
        if(isset($_FILES['image'])){
            $file_save = "../image/" ;
            $taget_file = $file_save.basename($_FILES['image']['name']) ;
            $style_file = strtolower(pathinfo($taget_file,PATHINFO_EXTENSION)) ;
            $upload_oke = true ;
            if(file_exists($taget_file)){
                $i = 1 ;
                while(file_exists($taget_file)){
                    $taget_file = $file_save.$i.basename($_FILES['image']['name']) ;
                    $i++ ;
                }
            }
            if($style_file == "png" || $style_file == "jpeg" || $style_file == "jpg" || $style_file == "gif"){
                $upload_oke = true ;
            }
            else {            
                $upload_oke = false ;
            }
           if($upload_oke){
            if(move_uploaded_file($_FILES['image']['tmp_name'],$taget_file)){
                echo "save image success" ;
            }
           }
           else {
            $message_error = "file upload phải là png,jpeg,jpg,gif !" ;
            echo "<script> alert ('$message_error')</script>" ;
            return ;
           }

        //    insert vào bảng product
           $insert_product = "insert into products (image,product_name,price,color,inventory,category_id,brand,size,description)
           values ('$taget_file','$product_name',$price,'$color',$inventory,'$category','$brand','$size','$description');";
           $result_insert = $connect->query($insert_product) ;
           if($result_insert){
            $message_success1 = "Thêm sản phẩm thành công !" ;
            echo "<script> alert ('$message_success1')</script>" ;
            $product_name = "" ;
            $price = "";
            $color = "" ;
            $inventory = "" ;
            $style = "" ;
            $brand = "" ;
            $size = "" ;
            $description = "" ;
           }
           else {
            $message_error1 = "thêm sản phẩm không thành công !" ;
            echo "<script> alert ('$message_error1')</script>" ;
           }
        }

    }
    ?>
    
</body>
</html>