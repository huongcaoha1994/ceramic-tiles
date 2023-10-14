<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/headercompare.css">
    <title>Tiles Ceramic</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Gửi yêu cầu tìm kiếm khi người dùng nhập từ khóa
            $('#search1994').on('input', function() {
                var searchTerm = $(this).val();
                if (searchTerm.length >= 3) {
                    $.ajax({
                        url: 'demo-search.php',
                        method: 'POST',
                        data: {
                            search1994: searchTerm
                        },
                        success: function(response) {
                            $('#search-results1994').html(response);
                        }
                    });
                } else {
                    $('#search-results1994').empty();
                }
            });
        });

        $(document).ready(function() {
            // Gửi yêu cầu tìm kiếm khi người dùng nhập từ khóa
            $('#search1995').on('input', function() {
                var searchTerm = $(this).val();
                if (searchTerm.length >= 3) {
                    $.ajax({
                        url: 'demo-search.php',
                        method: 'POST',
                        data: {
                            search1995: searchTerm
                        },
                        success: function(response) {
                            $('#search-results1995').html(response);
                        }
                    });
                } else {
                    $('#search-results1995').empty();
                }
            });
        });
    </script>
</head>

<body>
    <header class="bg-dark-subtle fixed-top ">
        <div class="container ">
            <header class="d-flex flex-wrap justify-content-center py-2 border-bottom">
                <a href="./main.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <img src="../assets/img/homepage/logo.png" alt="logo" width="100px" height="70px" class="navbar-brand">
                </a>
                <ul class="nav nav-pills align-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="./shop.php">Shop</a>
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
            </header>
        </div>
    </header>
    <!-- Form tìm kiếm sản phẩm -->
    <div id="compare" class="justify-content-around">

        <form>
            <label for="search1994">Chọn sản phẩm 1 :</label>
            <input type="text" id="search1994" placeholder="Nhập tên sản phẩm">
        </form>
        <form>
            <label for="search1995">Chọn sản phẩm 2 :</label>
            <input type="text" id="search1995" placeholder="Nhập tên sản phẩm">
        </form>
    </div>

    <!-- Kết quả tìm kiếm -->

    <div id="search-results1994" class="container border rounded-1">

    </div>

    <div id="search-results1995" class="container border rounded-1">

    </div>

    <?php

    session_start();
    // unset($_SESSION['sp1']);
    // unset($_SESSION['sp2']) ;
    include("../core/model/database.php");
    if (isset($_GET['sp1'])) {
        $_SESSION['sp1'] = $_GET['sp1'];
    } else if (isset($_GET['sp2'])) {
        $_SESSION['sp2'] = $_GET['sp2'];
    }
    ?>

    <div id="container1994" class="container justify-content-around">
        <div class="row g-0">
            <?php
            if (isset($_SESSION['sp1']) && $_SESSION['sp1'] > 0) {
                $sp1 = $_SESSION['sp1'];
                $select_sp1 = "select * from products where product_id = $sp1 ;";
                $result_sp1 = $connect->query($select_sp1);
                if ($result_sp1->num_rows > 0) {
                    $row = $result_sp1->fetch_assoc();
            ?>
                    <div class="col-6 col-md-5">
                        <div class="card my-3">
                            <img src="<?php echo $row['image']; ?>" alt="" class="product-img">
                            <div class="card-body">
                                <h3><?php echo $row['product_name']; ?></h3>
                                <h4>Price : <?php echo $row['price']; ?></h4>
                                <h4>Brand : <?php echo $row['brand']; ?></h4>
                                <h4>Color : <?php echo $row['color']; ?></h4>
                                <h4>Size : <?php echo $row['size']; ?></h4>
                                <p>Description : <?php echo $row['description']; ?></p>
                                <form action="sosanh.php" method="POST">
                                    <input type="submit" name="delete1" value="Delete" class="btn btn-danger">
                                </form>
                            </div>
                        </div>
                    </div>
            <?php

                }
            }
            ?>
            <div class="d-none d-md-block col-md-2 position-relative">
                <p class="h1 position-absolute top-50 start-50 translate-middle">VS</p>
            </div>
            <?php

            if (isset($_SESSION['sp2']) && $_SESSION['sp2'] > 0) {
                $sp2 = $_SESSION['sp2'];
                $select_sp2 = "select * from products where product_id = $sp2 ;";
                $result_sp2 = $connect->query($select_sp2);
                if ($result_sp2->num_rows > 0) {
                    $row = $result_sp2->fetch_assoc();
            ?>
                    <div class="col-6 col-md-5">
                        <div class="card my-3">
                            <img src="<?php echo $row['image']; ?>" alt="" class="product-img">
                            <div class="card-body">
                                <h3><?php echo $row['product_name']; ?></h3>
                                <h4>Price : <?php echo $row['price']; ?></h4>
                                <h4>Brand : <?php echo $row['brand']; ?></h4>
                                <h4>Color : <?php echo $row['color']; ?></h4>
                                <h4>Size : <?php echo $row['size']; ?></h4>
                                <p>Description : <?php echo $row['description']; ?></p>
                                <form action="sosanh.php" method="POST">
                                    <input type="submit" name="delete2" value="Delete" class="btn btn-danger">
                                </form>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>

    <?php

    if (isset($_POST['delete1'])) {
        $_SESSION['sp1'] = 0;
        // header("location: sosanh.php");


    } else if (isset($_POST['delete2'])) {
        $_SESSION['sp2'] = 0;
        // header("location: sosanh.php");

    }
    ?>

    <?php
    include("footer.php");
    ?>
</body>

</html>