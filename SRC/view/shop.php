<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include("header.php");
    ?>
    <!-- breadcrumb -->
    <div class="container py-3">
        <div class="row align-items-center">
            <div class="col-12 text-center text-md-start col-md-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 mb-md-0 justify-content-center justify-content-md-start">
                        <li class="breadcrumb-item"><a href="#" class="fs-6">Home</a></li>
                        <li class="breadcrumb-item active fs-6" aria-current="page">Shop</li>
                    </ol>
                </nav>
            </div>
            <div class="col-12 text-center text-md-end col-md-6">
                <form action="shop.php" method="POST" class="d-flex">
                    <input type="text" name="rs_search" class="form-control rounded">
                    <input type="submit" name="search" value="search" class="btn btn-outline-primary">
                </form>

            </div>
        </div>
    </div>
    <!--  -->
    <div class="container">
        <div class="row">
            <div class="d-none col-lg-3 d-lg-block">
                <h5>Bộ lọc sản phẩm</h6>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Default radio
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Default checked radio
                    </label>
                </div>
            </div>

            <div class="col-12 col-lg-9">
                <div class="row">
                    <?php
                    include("search.php");
                    ?>
                </div>
            </div>
        </div>
    </div>

        <?php
        include("footer.php");
        ?>
</body>

</html>