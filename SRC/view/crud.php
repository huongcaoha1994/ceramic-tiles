<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../assets/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>CRUD</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-warning">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <img src="../assets/img/homepage/logo.png" alt="" height="70">
                        </a>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li>
                                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link link-dark px-0 align-middle">
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span></a>
                                <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="../view/admin.php" class="nav-link link-dark px-0"><i class="fs-4 bi-speedometer2"></i><span class="d-none d-sm-inline">Sales Information</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="../view/order.php" class="nav-link link-dark px-0 align-middle">
                                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Order Status</span></a>
                            </li>
                            
                            <li>
                                <a href="#submenu3" data-bs-toggle="collapse" class="nav-link link-dark px-0 align-middle">
                                    <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                                    <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="../view/createProduct.php" class="nav-link link-dark px-0"><i class="bi bi-bag-plus-fill"></i> <span class="d-none d-sm-inline">Add Product</span></a>
                                    </li>
                                    <li>
                                        <a href="../view/crud.php" class="nav-link link-dark px-0"><i class="bi bi-file-earmark-plus-fill"></i><span class="d-none d-sm-inline">CRUD</span></a>
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
                        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
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
                                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../assets/img/homepage/a.png" alt="mdo" width="32" height="32" class="rounded-circle">
                                </a>
                                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" >
                                    <li><a class="dropdown-item" href="#">New project...</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                                </ul>
                            </div>
                        </div>
                        </div>
                    </header>                   
                    <!--tạo table ở đây-->
                    <table>
                    <thead>
                        <tr>
                            <th>Product ID</th>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Color</th>
                            <th>Catogory</th>
                            <th>Brand</th>
                            <th>Size</th>
                            <th>Description</th>
                            <th>Inventory</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php
                        $results_per_page = 10;
                        $sql = "select products.* from products";
                            
                        $result = $connect->query($sql);
                        $number_of_result = $result->num_rows;
                        $number_of_page = ceil($number_of_result / $results_per_page);
                        if (!isset($_GET['page'])) {
                            $page = 1;
                        } else {
                            $page = $_GET['page'];
                        }
                        $page_first_result = ($page - 1) * $results_per_page;
                        $sql = "select 
                                products.*
                                , categories.categories_name as cate_name
                            from products
                            join categories on products.category_id = categories.categories_id 
                            LIMIT " . $page_first_result . ',' . $results_per_page;
                            $result = $connect->query($sql);
                        foreach ($result as $each) :
                        ?>
                        <tr>
                            <td><?php echo $each['product_id']; ?></td>
                            <td><img src="<?php echo $each['image']; ?>" alt="Product Image"
                                    style="max-width: 100px;"></td>
                            <td><?php echo $each['product_name']; ?></td>
                            <td><?php echo $each['price']; ?></td>
                            <td><?php echo $each['color']; ?></td>
                            <td><?php echo $each['cate_name']; ?></td>
                            <td><?php echo $each['brand']; ?></td>
                            <td><?php echo $each['size']; ?></td>
                            <td><?php echo $each['description']; ?></td>
                            <td><?php echo $each['inventory']; ?></td>
                            <td>
                            <a class="text-decoration-none" href="../core/model/product_cart_delete.php?product_id=<?php echo $product_id ?>">
                                    <button class="btn btn-primary">
                                        <i class="fa-solid fa-trash-can"></i> Update
                                    </button>
                                </a>
                                <a class="text-decoration-none" href="">
                                    <button class="btn btn-danger">
                                        <i class="fa-solid fa-trash-can"></i> Remove
                                    </button>
                                </a>
                            </td>
                        </tr>
                        <?php
                    endforeach;
                  
                    ?>
                </table>
                <table>

                </table>
                        <?php 
                          for ($page = 1; $page <= $number_of_page; $page++) {
                            echo '<a href="crud.php?page=' . $page . '" id="pagination">page' . $page . '  | </a>';
                        }
                        ?>
                    <div class="row">
                        <footer class="bg-white text-center text-lg-start text-decoration-none ">
                            <div class="text-center p-3 ">
                                © 2023 Ok Bro:<a class="text-dark text-decoration-none" href="#">Cera Tiles.com</a>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>