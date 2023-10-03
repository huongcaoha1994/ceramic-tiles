<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../cssfiles/createproduct.css">  
    <link rel="stylesheet" href="../cssfiles/bootstrap.css">
</head>
<body>
<!-- thêm chút bootstrap vào form -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src="../image/ec.jpg" alt="" width="90" height="80">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav nav-pills nav-justified">
                <li class="nav-item">
                <a class="nav-link active" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Categories</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Customers</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Orders</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
    </header>
    <main class="container-fluid">
        <div class="row">
        <div class="col-md-4">
            <h1>Add Product</h1>
            <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="product_name" name="product_name" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <div class="mb-3">
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
            <div class="mb-3">
                <label for="inventory" class="form-label">Inventory</label>
                <input type="number" class="form-control" id="inventory" name="inventory" required>
            </div>
            <div class="mb-3">
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
            <div class="mb-3">
                <label for="size">Size:</label>
                <input type="text" name="size" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="brand" class="form-label">Brand</label>
                <input type="text" class="form-control" id="brand" name="brand" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" cols="30" rows="10"></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <input type="submit" name="create_product" class="btn btn-primary" value="Create">
            </form>
        </div>
        </div>
    </main>
    <footer class="bg-light text-center text-lg-start">
    <div class="text-center p-3 bg-dark text-white" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Copyright:Ok!
    </div>
    </footer>
    <!-- xử lý dữ liệu từ form gửi đến -->
    <?php 
    include("database.php");
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