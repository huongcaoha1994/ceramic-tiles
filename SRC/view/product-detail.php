<?php
include('./header.php')
?>

<h1 class="text-center">Product Detail</h1>
<?php
// session_start();

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
                <div class="col-12 col-lg-4 py-2 text-center">
                    <img src="../assets/img/<?php echo $row['image']; ?>" alt="" width="300" height="300">
                </div>
                <div class="col-12 col-lg-8 py-2">
                    <h4><?php echo $row['product_name']; ?></h4>
                    <table class="table table-product">
                        <tbody>
                            <tr>
                                <th scope="row">Color : </th>
                                <td>
                                    <p><?php echo $row['color']; ?></p>
                                </td>

                            </tr>
                            <tr>
                                <th scope="row">Inventory: </th>
                                <td><?php echo $row['inventory']; ?></td>

                            </tr>
                            <tr>
                                <th scope="row">Brand : </th>
                                <td>
                                    <p><?php echo $row['brand']; ?></p>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Size : </th>
                                <td>
                                    <p><?php echo $row['size']; ?></p>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Price : </th>
                                <td>
                                    <p><?php echo $row['price']; ?></p>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                    <form action="../core/model/add_to_cart.php?product_id=<?php echo $row['product_id'] ; ?>" method="POST">
                        <label for="quantity">Quantity : </label>
                        <input type="number" name="quantity" value="1" required>
                        <span>Available: <span class="fw-bold"><?php echo $row['inventory']; ?></span><span>
                                <br>
                                <input type="submit" name="add_to_cart" value="Add to cart" class="btn btn-primary my-3">
                    </form>
                    <a href="#" ><button class="btn btn-secondary">Download Word File</button></a>
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
include("../core/model/add_to_cart.php");
?>
<a href="../view/shop.php">Go to Shop</a>

<?php
include('./footer.php')
?>