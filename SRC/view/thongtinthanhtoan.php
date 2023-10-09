<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- thanh toán bằng momo -->
<form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
                          action="xulythanhtoanmomo.php">
    <input type="submit" name="momo" value="Thanh toán MoMo bằng QR code">
</form>

<form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
                          action="xulythanhtoanmomo_atm.php">
    <input type="submit" name="momo" value="Thanh toán MoMo bằng ATM">
</form>

    <!-- thanh toán bằng vnpay -->

    <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
                          action="congthanhtoan.php">
    <input type="submit" name="redirect" id="redirect" value="Thanh toán bằng vnpay">
</form>


<?php 
if(isset($_GET['message']) && $_GET['message'] === "Successful."){
    echo "<script> alert ('thanh toán thành công !')</script>" ;
}
?>
</body>
</html>