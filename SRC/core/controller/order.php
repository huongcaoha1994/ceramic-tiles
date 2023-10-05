<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    session_start();
    include("../model/database.php");
        if(isset($_SESSION['user_id'])){
            $user_id = $_SESSION['user_id'] ;
            $get_max_value = "select max(order_id) as max from orders ;";
            $result_max = $connect->query($get_max_value);
            if($result_max->num_rows > 0 ) {
                $row = $result_max->fetch_assoc();
                $max_order = $row['max'] + 1 ;

            }
            $get_product = "select * from carts where user_id = $user_id ;" ;
            $result_product = $connect->query($get_product);
            if($result_product->num_rows > 0 ){
                while($row = $result_product->fetch_assoc()){
                    $product_id = $row['product_id'];
                    $price = $row['price'] ;
                    $quantity = $row['quantity'] ;
                    $total_money = $row['total_money'];
                    $insert_order_detail = "insert into order_detail (orderDetail_id,product_id,price,quantity,total_money,user_id)
                    values ($max_order,$product_id,$price,$quantity,$total_money,$user_id);";
                    $result_insert = $connect->query($insert_order_detail);
                    if($insert_order_detail){
                        echo "đã đặt hàng thành công" ;
                        $delete_cart = "delete from carts where user_id = $user_id;";
                        $result_delete = $connect->query($delete_cart);
                    }
                    
                }
            }
            
        }
       
        
    ?>
</body>
</html>