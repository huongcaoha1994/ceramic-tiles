<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <title>Tiles Ceramic</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light" aria-label="Main navigation" id="header">
        <div class="container-fluid">
            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="../assets/img/homepage/logo.png" alt="logo" width="100px" height="70px" class="navbar-brand">
            </a>
            <div class="navbar-collapse offcanvas-collapse px-2" id="navbarsExampleDefault">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Wall tiles</a>
                        
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item " href="shop.php?category=bathroom">Bathroom wall tiles</a></li>
                            <li><a class="dropdown-item " href="shop.php?category=kitchen">Kitchen wall tiles</a></li>
                            <li><a class="dropdown-item " href="shop.php?category=outdoor">Outdoor wall tiles</a></li>
                            <li><a class="dropdown-item " href="shop.php?category=living">Living room</a></li>
                            <li><a class="dropdown-item " href="shop.php?category=bedroom">Bedroom</a></li>
                            <li><a class="dropdown-item " href="shop.php?category=commercial">Commercial spaces tiles</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Floor tiles</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item " href="shop.php?category=bathroom">Bathroom wall tiles</a></li>
                            <li><a class="dropdown-item " href="shop.php?category=kitchen">Kitchen wall tiles</a></li>
                            <li><a class="dropdown-item " href="shop.php?category=outdoor">Outdoor wall tiles</a></li>
                            <li><a class="dropdown-item " href="shop.php?category=living">Living room</a></li>
                            <li><a class="dropdown-item " href="shop.php?category=bedroom">Bedroom</a></li>
                            <li><a class="dropdown-item " href="shop.php?category=commercial">Commercial spaces tiles</a></li>
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
                        <a class="nav-link" href="#">Expert corner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
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
                    <a href="">
                        <button class="btn btn-primary">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </nav>
        <form action="shop.php" method="POST">
            <input type="text" name="rs_search">
            <input type="submit" name="search" value="search">
        </form>
    <script src="../assets/js/headerscript.js"></script>
    <script src="../assets/js/bootstrap.bundle.js"></script>
</body>

</html>