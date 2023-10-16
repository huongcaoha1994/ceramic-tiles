<?php
require '../core/model/database.php';

if (isset($_GET['up_success'])) {
    echo "<script> alert ('".$_GET['up_success']."')</script>";
}

if (isset($_GET['message_error'])) {
    echo "<script> alert ('".$_GET['message_error']."')</script>";
}

$product_id = $_GET['product_id'];

$sql = "select 
products.*,
substring(category_id,1,1) as pstr,
substring(category_id,2,1) as cstr
from products where product_id = $product_id";

$result = $connect->query($sql);
$each = mysqli_fetch_array($result);
?>

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
                    <a href="#"
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
                <form action="../core/model/process_update_product.php?product_id=<?php echo $product_id; ?>" method="POST" enctype="multipart/form-data">
                    <div class="row tm-edit-product-row">
                        <div class="col-xl-4 col-lg-6 col-md-12">

                            <div class="form-group mb-3">
                                <label for="product_id">Product ID: <?php echo $each['product_id'];?>
                                </label>
                            </div>
                            <div class="form-group mb-3">
                                <label for="product_name">Product Name
                                </label>
                                <input id="product_name" name="nproduct_name" value="<?php echo $each['product_name'] ?>"
                                    type="text" class="form-control validate" required>
                            </div>
                            <!-- <div class="form-group mb-3"> -->
                            <label for="description">Description</label>
                            <textarea name="ndescription" id="description" cols="30"
                                rows="10"><?php echo $each['description'] ?></textarea>
                            <!-- </div> -->
                            <div class="form-group mb-3">
                                <h3>Color</h3>
                                <br>
                                <input type="radio" name="ncolor" value="white" <?php if ($each['color'] == "white")
                                    echo "checked"; ?>>
                                <label for="color">White</label>
                                </t>
                                <input type="radio" name="ncolor" value="black" <?php if ($each['color'] == "black")
                                    echo "checked"; ?>>
                                <label for="color">Black</label>
                                </t>
                                <input type="radio" name="ncolor" value="yellow" <?php if ($each['color'] == "yellow")
                                    echo "checked"; ?>>
                                <label for="color">Yellow</label>
                                </t>
                                <input type="radio" name="ncolor" value="red" <?php if ($each['color'] == "red")
                                    echo "checked"; ?>>
                                <label for="color">Red</label>
                                </t>
                                <input type="radio" name="ncolor" value="orange" <?php if ($each['color'] == "orange")
                                    echo "checked"; ?>>
                                <label for="color">Orange</label>
                                </t>
                                <input type="radio" name="ncolor" value="pink" <?php if ($each['color'] == "pink")
                                    echo "checked"; ?>>
                                <label for="color">Pink</label>
                                </t>
                                <input type="radio" name="ncolor" value="brown" <?php if ($each['color'] == "brown")
                                    echo "checked"; ?>>
                                <label for="color">Brown</label>
                                <br>
                                <!-- <select class="form-control" id="color" name="ncolor">
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
                                    <input id="price" name="nprice" value="<?php echo $each['price'] ?>" type="number"
                                        class="form-control validate hasDatepicker">
                                </div>
                                <div class="form-group mb-3 col-xs-12 col-sm-6">
                                    <label for="inventory">Inventory
                                    </label>
                                    <input id="inventory" name="ninventory" value="<?php echo $each['inventory'] ?>"
                                        type="number" class="form-control validate" required="">
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                            <div class="form-group mb-3 col-xs-12 col-sm-6">
                                <h3>Brand</h3>
                                <br>
                                <input id="brand" name="nbrand" type="radio" value="Viglacera" <?php if ($each['brand'] == "Viglacera")
                                    echo "checked"; ?>>
                                <label for="brand">Viglacera</label>
                                </t>
                                <input id="brand" name="nbrand" type="radio" value="Viglacera Platinum" <?php if ($each['brand'] == "Viglacera Platinum")
                                    echo "checked"; ?>>
                                <label for="brand">Viglacera Platinum</label>
                                </t>
                                <input id="brand" name="nbrand" type="radio" value="Chinese Tiles" <?php if ($each['brand'] == "Chinese Tiles")
                                    echo "checked"; ?>>
                                <label for="brand">Chinese Tiles</label>
                                <br>
                                <input id="brand" name="nbrand" type="radio" value="Bach Ma Tiles" <?php if ($each['brand'] == "Bach Ma Tiles")
                                    echo "checked"; ?>>
                                <label for="brand">Bach Ma Tiles</label>
                                </t>
                                <input id="brand" name="nbrand" type="radio" value="Dong Tam Brick" <?php if ($each['brand'] == "Dong Tam Brick")
                                    echo "checked"; ?>>
                                <label for="brand">Dong Tam Brick</label>
                                </t>
                                <input id="brand" name="nbrand" type="radio" value="Eurotile" <?php if ($each['brand'] == "Eurotile")
                                    echo "checked"; ?>>
                                <label for="brand">Eurotile</label>
                                <br>

                            </div>
                            <div class="form-group mb-3 col-xs-12 col-sm-6">
                                <h3>Size</h3>
                                <br>
                                <input type="radio" name="nsize" value="80x80" <?php if ($each['size'] == "80x80")
                                    echo "checked"; ?>>
                                <label for="size">80x80</label>
                                </t>
                                <input type="radio" name="nsize" value="60x60" <?php if ($each['size'] == "60x60")
                                    echo "checked"; ?>>
                                <label for="size">60x60</label>
                                </t>
                                <input type="radio" name="nsize" value="45x45" <?php if ($each['size'] == "45x45")
                                    echo "checked"; ?>>
                                <label for="size">45x45</label>
                                </t>
                                <input type="radio" name="nsize" value="30x90" <?php if ($each['size'] == "30x90")
                                    echo "checked"; ?>>
                                <label for="size">30x90</label>
                                <br>
                                <input type="radio" name="nsize" value="40x40" <?php if ($each['size'] == "40x40")
                                    echo "checked"; ?>>
                                <label for="size">40x40</label>
                                </t>
                                <input type="radio" name="nsize" value="30x60" <?php if ($each['size'] == "30x60")
                                    echo "checked"; ?>>
                                <label for="size">30x60</label>
                                </t>
                                <input type="radio" name="nsize" value="25x40" <?php if ($each['size'] == "25x40")
                                    echo "checked"; ?>>
                                <label for="size">25x40</label>
                                </t>
                                <input type="radio" name="nsize" value="40x80" <?php if ($each['size'] == "40x80")
                                    echo "checked"; ?>>
                                <label for="size">40x80</label>
                                <br>
                            </div>
                            <!-- <div class="form-group mb-3"> -->
                           
                                <label for="nparent_category">Select Parent Option:</label>
                            <select id="nparent_category" name="nparent_category" value="<?php $each['pstr'];?>" required>
                                <option value="">-- Select --</option>
                                <option value="1" >Wall tiles</option>
                                <option value="2">Floor tiles</option>
                                <option value="3">Special</option>
                            </select>

                            <label for="nchild_category">Select Child Option:</label>
                            <select id="nchild_category" name="nchild_category" value="<?php $each['cstr'];?>" required>
                                <option value="">-- Select --</option>
                            </select>
                                <!-- </div> -->

                                <br>
                                Image: <img height="100" src="<?php echo $each['image']; ?>" alt="">
                                <input type="hidden" name="photo_old" value="<?php echo $each['image']; ?>">

                                <div class="tm-product-img-dummy mx-auto">
                                    <!-- <i class="" onclick="document.getElementById('fileInput').click();"></i> -->
                                </div>
                                <div class="custom-file mt-3 mb-3">
                                    <label for="image">Change image</label>
                                    <input type="file" name="nimage">
                                    <br>
                                    <!-- <input type="submit" name="create_product" value="create product">
                            </div> -->
                                </div>
                                <div class="col-12">
                                    <input type="submit" name="save_changes" value="Save changes">
                                    
                                    <button><a href="../view/crud.php" style="text-decoration: none;">Cancel</a></button>
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
   
</body>
<script>
// Lấy các đối tượng select từ DOM
var parentSelect = document.getElementById("nparent_category");
var childSelect = document.getElementById("nchild_category");

// Định nghĩa các giá trị tương ứng của select option con
var childOptions = {
    "1": [{
            display: "bathroom",
            value: "1"
        },
        {
            display: "kitchen",
            value: "2"
        },
        {
            display: "outdoor",
            value: "3"
        },
        {
            display: "living room",
            value: "4"
        },
        {
            display: "bedroom",
            value: "5"
        },
        {
            display: "commercial space",
            value: "6"
        }
    ],
    "2": [{
            display: "bathroom",
            value: "1"
        },
        {
            display: "kitchen",
            value: "2"
        },
        {
            display: "outdoor",
            value: "3"
        },
        {
            display: "living room",
            value: "4"
        },
        {
            display: "bedroom",
            value: "5"
        },
        {
            display: "commercial space",
            value: "6"
        }
    ],
    "3": [{
            display: "germ free",
            value: "1"
        },
        {
            display: "tac",
            value: "2"
        },
        {
            display: "anti static",
            value: "3"
        },
        {
            display: "cool roof",
            value: "4"
        }
    ]
};

// Xử lý sự kiện onchange
parentSelect.onchange = function() {
    var selectedValue = parentSelect.value;
    childSelect.innerHTML = ""; // Xóa tất cả các option cũ

    if (selectedValue !== "") {
        var options = childOptions[selectedValue];

        // Tạo các option mới cho select option con
        for (var i = 0; i < options.length; i++) {
            var option = document.createElement("option");
            option.text = options[i].display;
            option.value = options[i].value;
            childSelect.appendChild(option);
        }
    }
};
</script>

</html>