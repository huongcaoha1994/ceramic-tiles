<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/headercart.css">
    <link rel="stylesheet" href="../assets/css/animation.css">
    <link rel="stylesheet" href="../assets/css/cta.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../assets/js/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

    <title>Tiles Ceramic</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light " aria-label="Main navigation" id="header">
        <div class="container-fluid mx-4">
            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="./main.php">
                <img src="../assets/img/homepage/logo.png" alt="logo" width="100px" height="70px" class="navbar-brand">
            </a>
            <div class="navbar-collapse offcanvas-collapse px-2 text-warning" id="navbarsExampleDefault">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-warning">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="./shop.php">Shop</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Wall tiles</a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item " href="shop.php?category=wallbathroom">Bathroom wall tiles</a></li>
                            <li><a class="dropdown-item " href="shop.php?category=wallkitchen">Kitchen wall tiles</a></li>
                            <li><a class="dropdown-item " href="shop.php?category=walloutdoor">Outdoor wall tiles</a></li>
                            <li><a class="dropdown-item " href="shop.php?category=wallliving">Living room</a></li>
                            <li><a class="dropdown-item " href="shop.php?category=wallbedroom">Bedroom</a></li>
                            <li><a class="dropdown-item " href="shop.php?category=wallcommercial">Commercial spaces tiles</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Floor tiles</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item " href="shop.php?category=floorbathroom">Bathroom wall tiles</a></li>
                            <li><a class="dropdown-item " href="shop.php?category=floorkitchen">Kitchen wall tiles</a></li>
                            <li><a class="dropdown-item " href="shop.php?category=flooroutdoor">Outdoor wall tiles</a></li>
                            <li><a class="dropdown-item " href="shop.php?category=floorliving">Living room</a></li>
                            <li><a class="dropdown-item " href="shop.php?category=floorbedroom">Bedroom</a></li>
                            <li><a class="dropdown-item " href="shop.php?category=floorcommercial">Commercial spaces tiles</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Special Wall tiles</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item " href="shop.php?category=special">Germ free</a></li>
                            <li><a class="dropdown-item " href="shop.php?category=special">Tac</a></li>
                            <li><a class="dropdown-item " href="shop.php?category=special">Anti static</a></li>
                            <li><a class="dropdown-item " href="shop.php?category=special">Cool roof</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./expertcorner.php">Expert corner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="row flex-nowrap">
                <div class="col">
                    <a href="../core/model/login.php">
                        <button class="btn btn-primary">
                            <i class="fas fa-user">
                            </i></button>
                    </a>
                </div>
                <div class="col">
                    <button class="btn btn-primary position-relative btn-cart">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            <?php

                            if (isset($_SESSION['cart'])) {

                                $carts = $_SESSION['cart'];
                                $number_product = 0;
                                foreach ($carts as $value) {
                                    $number_product++;
                                }
                                echo $number_product;
                            } else {
                                echo "0";
                            }
                            ?>
                            <span class="visually-hidden">unread messages</span>
                        </span>
                        <div class="header_cart position-absolute z-2 rounded-1 border">
                            <div class="header__cart-heading">
                                <p>Sản phẩm đã thêm</p>
                            </div>
                            <div class="header__cart-body">
                                <!-- Thêm sản phẩm ở đây -->
                                <?php
                                require '../core/model/database.php';
                                if (isset($_SESSION['cart'])) {
                                    $cart = $_SESSION['cart'];
                                    foreach ($cart as $product_id => $quantity) :
                                        $sql = "select * from products where product_id = $product_id";
                                        $result = $connect->query($sql);
                                        $each = mysqli_fetch_array($result);
                                ?>
                                        <div class="container px-0 py-2 pe-2">
                                            <div class="row gx-3">
                                                <div class="col-3"><img src="../assets/img/<?php echo $each['image']; ?>" alt="Product Image" class="w-100"></div>
                                                <div class="col-9">
                                                    <div class="row gx-2">
                                                        <div class="col-8 text-start"><p class="text-dark mb-0"><?php echo $each['product_name']; ?></p></div>
                                                        <div class="col-4 text-end"><p class="text-warning  mb-0">Price: <?php echo $each['price']; ?>$</p></div>
                                                    </div>
                                                    
                                                    <div class="row gx-2">
                                                        <div class="col-6 text-start">
                                                        <p class="text-gray mb-0">Quantity: <?php echo $quantity; ?></p>
                                                        </div>
                                                        <div class="col-6 text-end">
                                                            <a href="#" class="text-danger ">Delete</a>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>



                                <?php endforeach;
                                }
                                $connect->close();
                                ?>


                            </div>
                            <div class="header__cart-footer py-2">
                                <div class="d-flex justify-content-around">
                                    <a href="../view/views_cart.php" class="btn btn-primary">Check cart</a>
                                    <a href="" class="btn btn-primary">Checkout</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            </button>
        </div>

        <?php echo "xin chào Nguyễn Công Hưởng"; ?>
        </div>
        </div>
    </nav>

    <script src="../assets/js/headerscript.js"></script>
    <script src="../assets/js/bootstrap.bundle.js"></script>


</body>

</html>