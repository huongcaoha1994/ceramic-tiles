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
    <title>Tiles Ceramic</title>
    <style>
        #logout {
            display: none;
        }
    </style>
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
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-warning main-menu">
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
                            <li><a class="dropdown-item " href="shop.php?category=specialgem">Germ free</a></li>
                            <li><a class="dropdown-item " href="shop.php?category=specialtac">Tac</a></li>
                            <li><a class="dropdown-item " href="shop.php?category=specialanti">Anti static</a></li>
                            <li><a class="dropdown-item " href="shop.php?category=specialcool">Cool roof</a></li>
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
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.canva.com/design/DAFxI2DMw7I/DOMNh-qwjVs0hjdxzmMR8Q/view?utm_content=DAFxI2DMw7I&utm_campaign=designshare&utm_medium=link&utm_source=publishsharelink&mode=preview">E-Catalogue</a>
                    </li>
                </ul>
            </div>

            <div class="row flex-nowrap">
                <div class="col-10 button-offcanvas d-none d-lg-flex justify-content-between">
                    <a href="./user.php" class="text-decoration-none">
                        <button class="btn btn-primary">
                            <i class="fas fa-user">
                            </i></button>
                    </a>
                    <div class="text-start">
                        <?php
                        if (isset($_SESSION['full_name'])) {
                            $fullname = $_SESSION['full_name'];
                            echo "<h6>Hello $fullname </h6>";
                        }
                        ?>
                        <a style="text-decoration: none;" href="../core/controller/logout.php" id="logout"><i class="fa-solid fa-right-from-bracket"></i>Log out</a>
                    </div>
                </div>
                <div class="col-2 transform-before-login">
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
                                if($number_product > 0){

                                    echo $number_product;
                                } 
                                else {
                                    echo 0 ;
                                }
                            } else {
                                echo 0;
                            }
                            ?>
                            <span class="position-unset"></span>
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
                                                <div class="col-3"><img src="<?php echo $each['image']; ?>" alt="Product Image" class="w-100"></div>
                                                <div class="col-9">
                                                    <div class="row gx-2">
                                                        <div class="col-8 text-start">
                                                            <p class="text-dark mb-0"><?php echo $each['product_name']; ?></p>
                                                        </div>
                                                        <div class="col-4 text-end">
                                                            <p class="text-warning  mb-0">Price: <?php echo $each['price']; ?>$</p>
                                                        </div>
                                                    </div>

                                                    <div class="row gx-2">
                                                        <div class="col-6 text-start">
                                                            <p class="text-gray mb-0">Quantity: <?php echo $quantity; ?></p>
                                                        </div>
                                                        <div class="col-6 text-end">
                                                            <a href="../core/model/product_cart_delete.php?product_id=<?php echo $product_id; ?>" class="text-danger ">Delete</a>
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
                                    <a href="./views_cart.php" class="btn btn-primary">Check cart</a>
                                    <a href="./check_out.php" class="btn btn-primary">Checkout</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            </button>
        </div>


        <?php
        if (isset($_SESSION['user_id'])) {
            echo " <style>
            #logout {
                display: block;
            }
        </style>";
        }

        ?>

        </div>
        </div>
    </nav>

    <script src="../assets/js/headerscript.js"></script>
    <script src="../assets/js/bootstrap.bundle.js"></script>


</body>

</html>