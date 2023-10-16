<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="#">
    <title>Document</title>
  
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-warning">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="../view/main.php"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <img src="../assets/img/homepage/logo.png" alt="" height="70">
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link link-dark px-0 align-middle">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span></a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="../view/admin.php" class="nav-link link-dark px-0"><i
                                            class="fs-4 bi-speedometer2"></i><span class="d-none d-sm-inline">Sales
                                            Information</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="../view/order.php" class="nav-link link-dark px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Order
                                    Status</span></a>
                        </li>

                        <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link link-dark px-0 align-middle">
                                <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="../view/createProduct.php" class="nav-link link-dark px-0"><i
                                            class="bi bi-bag-plus-fill"></i> <span class="d-none d-sm-inline">Add
                                            Product</span></a>
                                </li>
                                <li>
                                    <a href="../view/crud.php" class="nav-link link-dark px-0"><i
                                            class="bi bi-file-earmark-plus-fill"></i> <span
                                            class="d-none d-sm-inline">CRUD</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="../view/member.php" class="nav-link link-dark px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Contact</span> </a>
                        </li>
                        <li>
                            <a href="../core/model/create_blog.php" class="nav-link link-dark px-0 align-middle">
                                <i class="fs-4 bi-substack"></i> <span class="ms-1 d-none d-sm-inline">Create Blog</span> </a>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="col py-3 main">
                <header class="p-3 mb-3 border-bottom">
                    <div class="container">
                        <div
                            class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                            </form>
                            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                                <li><a href="#" class="nav-link px-2 link-secondary"></a></li>
                                <li><a href="#" class="nav-link px-2 link-dark"></a></li>
                                <li><a href="#" class="nav-link px-2 link-dark"></a></li>
                                <li><a href="#" class="nav-link px-2 link-dark"></a></li>
                            </ul>
                            <button type="button" class="btn btn-warning btn-floating mx-1 ">
                                <i class="bi bi-envelope-check"></i>
                            </button>
                            <button type="button" class="btn btn-warning btn-floating mx-1 ">
                                <i class="bi bi-bell"></i>
                            </button>
                            <div class="dropdown text-end">
                                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle"
                                    id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../assets/img/homepage/a.png" alt="mdo" width="32" height="32"
                                        class="rounded-circle">
                                </a>
                                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                                    <li><a class="dropdown-item" href="#">New project...</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </header>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row tm-edit-product-row">
                        <div class="col-xl-4 col-lg-6 col-md-12">
                          
                                <div class="form-group mb-3">
                                    <label for="product_name">Product Name
                                    </label>
                                    <input id="product_name" name="product_name" type="text" class="form-control validate" required>
                                </div>
                                <!-- <div class="form-group mb-3"> -->
                                    <label for="description">Description</label>
                                   <textarea name="description" id="description" cols="30" rows="10"></textarea>
                                <!-- </div> -->
                                <div class="form-group mb-3">
                                    <h3>Color</h3>
                                    <br>
                                    <input type="radio" name="color" value="white">
                                    <label for="color">White</label>
                                    </t>
                                    <input type="radio" name="color" value="black">
                                    <label for="color">Black</label>
                                    </t>
                                    <input type="radio" name="color" value="yellow">
                                    <label for="color">Yellow</label>
                                    </t>
                                    <input type="radio" name="color" value="red">
                                    <label for="color">Red</label>
                                    </t>
                                    <input type="radio" name="color" value="orange">
                                    <label for="color">Orange</label>
                                    </t>
                                    <input type="radio" name="color" value="pink">
                                    <label for="color">Pink</label>
                                    </t>
                                    <input type="radio" name="color" value="brown">
                                    <label for="color">Brown</label>
                                    <br>
                                    <!-- <select class="form-control" id="color" name="color">
                                        <option value="white">White</option>
                                        <option value="black">Black</option>
                                        <option value="yellow">Yellow</option>
                                        <option value="red">Red</option>
                                        <option value="orange">Orange</option>
                                        <option value="pink">Pink</option>
                                        <option value="brown">Brown</option>
                                        </select>    -->
                                </div>
                                <div class="row">
                                    <div class="form-group mb-3 col-xs-12 col-sm-6">
                                        <label for="price">Price
                                        </label>
                                        <input id="price" name="price" type="number"
                                            class="form-control validate hasDatepicker">
                                    </div>
                                    <div class="form-group mb-3 col-xs-12 col-sm-6">
                                        <label for="inventory">Inventory
                                        </label>
                                        <input id="inventory" name="inventory" type="number"
                                            class="form-control validate" required="">
                                    </div>
                                </div>
                           
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                            <div class="form-group mb-3 col-xs-12 col-sm-6">
                                <h3>Brand</h3>
                                <br>
                                <input id="brand" name="brand" type="radio" value="Viglacera">
                                <label for="brand">Viglacera</label>
                                </t>
                                <input id="brand" name="brand" type="radio" value="Viglacera Platinum">
                                <label for="brand">Viglacera Platinum</label>
                                </t>
                                <input id="brand" name="brand" type="radio" value="Chinese Tiles">
                                <label for="brand">Chinese Tiles</label>
                                <br>
                                <input id="brand" name="brand" type="radio" value="Bach Ma Tiles">
                                <label for="brand">Bach Ma Tiles</label>
                                </t>
                                <input id="brand" name="brand" type="radio" value="Dong Tam Brick">
                                <label for="brand">Dong Tam Brick</label>
                                </t>
                                <input id="brand" name="brand" type="radio" value="Eurotile">
                                <label for="brand">Eurotile</label>
                                <br>

                            </div>
                            <div class="form-group mb-3 col-xs-12 col-sm-6">
                                <h3>Size</h3>
                                <br>
                                <input type="radio" name="size" value="80x80">
                                <label for="size">80x80</label>
                                </t>
                                <input type="radio" name="size" value="60x60">
                                <label for="size">60x60</label>
                                </t>
                                <input type="radio" name="size" value="45x45">
                                <label for="size">45x45</label>
                                </t>
                                <input type="radio" name="size" value="30x90">
                                <label for="size">30x90</label>
                                <br>
                                <input type="radio" name="size" value="40x40">
                                <label for="size">40x40</label>
                                </t>
                                <input type="radio" name="size" value="30x60">
                                <label for="size">30x60</label>
                                </t>
                                <input type="radio" name="size" value="25x40">
                                <label for="size">25x40</label>
                                </t>
                                <input type="radio" name="size" value="40x80">
                                <label for="size">40x80</label>
                                <br>
                            </div>
                            <!-- <div class="form-group mb-3"> -->
                                <label for="parent_category">Select Parent Option:</label>
                                <select id="parent_category" name="parent_category">
                                    <option value="">-- Select --</option>
                                    <option value="1">Wall tiles</option>
                                    <option value="2">Floor tiles</option>
                                    <option value="3">Special</option>
                                </select>

                                <label for="child_category">Select Child Option:</label>
                                <select id="child_category" name="child_category">
                                    <option value="">-- Select --</option>
                                    <option value="1">bathroom</option>
                                    <option value="2">kitchen</option>
                                    <option value="3">outdoor</option>
                                    <option value="4">living room</option>
                                    <option value="5">bedroom</option>
                                    <option value="6">commercial space</option>
                                    <option value="1">special gem free</option>
                                    <option value="2">special tac</option>
                                    <option value="3">special anti static</option>
                                    <option value="4">special cool roof</option>
                                </select>
                            <!-- </div> -->


                            <div class="tm-product-img-dummy mx-auto">
                                <!-- <i class="" onclick="document.getElementById('fileInput').click();"></i> -->
                            </div>
                            <div class="custom-file mt-3 mb-3">
                                <label for="image">Upload image</label>
                               <input type="file" name="image">
                              <br>
                              <!-- <input type="submit" name="create_product" value="create product">
                            </div> -->
                        </div>
                        <div class="col-12">
                          <input type="submit" name="create_product" value="create_product">
                        </div>
                    </div>
                </form>
                <div class="row">
                    <footer
                        class="bg-white text-center text-lg-start text-decoration-none justify-content-around !important ">
                        <div class="text-center p-3 ">
                            © 2023 Ok Bro:<a class="text-dark text-decoration-none" href="#">Cera Tiles.com</a>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    <!-- xử lý dữ liệu từ form gửi đến -->
    <?php 
    include("../core/model/database.php");
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
        $parent_category = clean_data($_POST['parent_category']);
        $child_category = clean_data($_POST['child_category']);
        $category = $parent_category.$child_category ;
        $brand = clean_data($_POST['brand']) ;
        $size = clean_data($_POST['size']) ;
        $description = clean_data($_POST['description']) ;
        // xử lý hình ảnh và lưu ảnh vào folder
        if(isset($_FILES['image'])){
            $file_save = "../assets/img/image/" ;
            $target_file = $file_save.basename($_FILES['image']['name']) ;
            $style_file = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)) ;
            $upload_oke = true ;
            if(file_exists($target_file)){
                $i = 1 ;
                while(file_exists($target_file)){
                    $target_file = $file_save.$i.basename($_FILES['image']['name']) ;
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
            if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file)){
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
           values ('$target_file','$product_name',$price,'$color',$inventory,'$category','$brand','$size','$description');";
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