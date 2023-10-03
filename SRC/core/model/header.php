@@ -13,73 +13,8 @@
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img src="/images/logo.png" alt="logo" width="100px" height="70px" class="navbar-brand">
            <div class="offcanvas-body">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Wall tiles
                        </a>
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
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Floor tiles
                        </a>
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
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Special tiles
                        </a>
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
                <form class="d-flex mb-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="nav justify-content-evenly">
                    <li class="nav-item btn btn-primary"><a href="#" class="nav-link link-dark px-0">Login</a></li>
                    <li class="nav-item btn btn-secondary"><a href="#" class="nav-link link-dark px-0">Sign up</a></li>
                  </ul>
            </div>
            <button class="btn btn-primary col-xl-auto" style="display: none;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            <!-- Mobile button -->
            <button class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="bi" fill="currentColor"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
@@ -88,7 +23,7 @@
                </svg>
            </button>
            
            <div class="offcanvas offcanvas-start" c id="offcanvasExample"
            <div class="offcanvas offcanvas-start" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <a href="header.html" class="logo-link-offcanvas">