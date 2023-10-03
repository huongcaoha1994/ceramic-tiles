<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cssfiles/bootstrap.css">
    <link rel="stylesheet" href="../cssfiles/main.css">
    <link rel="stylesheet" href="../cssfiles/style.css">
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
                <img src="../image/logo.png" alt="logo" width="100px" height="70px" class="navbar-brand">
            </a>
            <div class="navbar-collapse offcanvas-collapse px-2" id="navbarsExampleDefault">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Wall tiles</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item " href="#">Bathroom wall tiles</a></li>
                            <li><a class="dropdown-item " href="#">Kitchen wall tiles</a></li>
                            <li><a class="dropdown-item " href="#">Outdoor wall tiles</a></li>
                            <li><a class="dropdown-item " href="#">Living room</a></li>
                            <li><a class="dropdown-item " href="#">Bedroom</a></li>
                            <li><a class="dropdown-item " href="#">Commercial spaces tiles</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Floor tiles</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item " href="#">Bathroom wall tiles</a></li>
                            <li><a class="dropdown-item " href="#">Kitchen wall tiles</a></li>
                            <li><a class="dropdown-item " href="#">Outdoor wall tiles</a></li>
                            <li><a class="dropdown-item " href="#">Living room</a></li>
                            <li><a class="dropdown-item " href="#">Bedroom</a></li>
                            <li><a class="dropdown-item " href="#">Commercial spaces tiles</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Special Wall tiles</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item " href="#">Germ free</a></li>
                            <li><a class="dropdown-item " href="#">Tac</a></li>
                            <li><a class="dropdown-item " href="#">Anti static</a></li>
                            <li><a class="dropdown-item " href="#">Cool roof</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Expert corner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="row flex-nowrap">
                <div class="col">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signupModal">
                        <i class="fas fa-user">
                        </i></button>
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


    <!-- Modal sign-in  -->
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h1 class="modal-title fs-5" id="signupModalLabel">Sign in</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                ....
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- offcanvas cart  -->

    <script src="../Project_Aptech_C2303L/TILES-LUXURY/js/headerscript.js"></script>
    <script src="../Project_Aptech_C2303L/TILES-LUXURY/js/bootstrap.bundle.js"></script>
</body>

</html>