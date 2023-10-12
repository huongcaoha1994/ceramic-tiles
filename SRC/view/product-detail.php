<?php
session_start();
include('./header.php')
?>

<h1 class="text-center">Product Detail</h1>
<?php

include("../core/model/database.php");

if (isset($_GET['product_id'])) {
    $product_id = htmlspecialchars($_GET['product_id']);
    $get_product = "select * from products where product_id = $product_id ;";
    $result_product = $connect->query($get_product);
    if ($result_product->num_rows > 0) {
        $row = $result_product->fetch_assoc();
?>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 py-2 text-center">
                    <img src="../assets/img/<?php echo $row['image']; ?>" alt="" width="300" height="300">
                </div>
                <div class="col-12 col-lg-6 py-2 border-primary rounded-2">
                    <div class="d-flex justify-content-between">
                    <h4 class="product-heading"><?php echo $row['product_name']; ?></h4>
                    <a href="sosanh.php?sp1=<?php echo $row['product_id']; ?>" class="compare-button justify-content-end"> <i class="fa-solid fa-plus"></i> Compare</a>
                    </div>
                    <div class="row py-3">
                        <div class="col-4">
                            <div class="row">
                                <div class="col-3">
                                    <img src="../assets/img/homepage/color-pallet.svg" alt="" sizes="25x25" srcset="" width="25px" height="25px">
                                </div>
                                <div class="col-9">
                                    <h6>Color</h6>
                                    <p><?php echo $row['color']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                        <div class="row">
                                <div class="col-3">
                                    <img src="../assets/img/homepage/tiles.svg" alt="" sizes="25x25" srcset="" width="25px" height="25px">
                                </div>
                                <div class="col-9">
                                    <h6>Brand</h6>
                                    <p><?php echo $row['brand']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                        <div class="row">
                                <div class="col-3">
                                    <img src="../assets/img/homepage/size.svg" alt="" sizes="25x25" srcset="" width="25px" height="25px">
                                </div>
                                <div class="col-9">
                                    <h6>Size</h6>
                                    <p><?php echo $row['size']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2><?php echo $row['price']; ?>$</h2>


                    <form action="../core/model/add_to_cart.php?product_id=<?php echo $row['product_id'] ; ?>&from_product_detail" method="POST">
                        <label for="quantity">Quantity : </label>
                        <input type="number" name="quantity" value="1" required>
                        <span>Available: <span class="fw-bold"><?php echo $row['inventory']; ?></span><span>
                                <br>
                                <input type="submit" name="add_to_cart" value="Add to cart" class="btn btn-primary my-3">
                    </form>
                    <a href="#"><button class="btn btn-secondary">Download Word File</button></a>
                </div>
                <div class="col-12 py-5">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Description</a>
                        </li>
                    </ul>
                    <p class="py-3"><?php echo $row['description']; ?></p>
                </div>
            </div>
        </div>

<?php
    }
}
?>

<?php


// if(isset($_POST['add_to_cart'])){

//     if(!isset($_SESSION['login'])){

//         header("location: ../model/login.php");
//         exit;
//     }
//     $product_id = htmlspecialchars($_POST['product_id']);
//     $quantity = htmlspecialchars($_POST['quantity']);
//     $get_product = "select * from products where product_id = $product_id ;" ;
//     $result_product = $connect->query($get_product);
//     if($result_product->num_rows > 0 ){
//         $row = $result_product->fetch_assoc();
//         $product_id = $row['product_id'] ;
//         $price = $row['price'] ;
//         $total_money = $quantity * $price ;
//         $user_id = $_SESSION['user_id'] ;
//         $insert_cart = "insert into carts (product_id,price,quantity,total_money,user_id)
//         values ($product_id,$price,$quantity,$total_money,$user_id) ;" ;
//         if($connect->query($insert_cart)){
//             echo "<script> alert ('thêm giỏ hàng thành công')</script>" ;
//             // header("location: ../../view/home.php");
//             // exit ;
//         }
//         else {
//             echo "<script> alert ('xin vui lòng thử lại !')</script>" ;
//         }
//     }
// }
// include("../core/model/add_to_cart.php");
?>


<?php
include('./footer.php')
?>