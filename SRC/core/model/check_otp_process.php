<?php 
session_start();
include 'database.php';

if(isset($_POST['send_code'])){
    $code = $_POST['code'] ;
    if($code === $_SESSION['randomNumber']) {      


        $query = "INSERT INTO users (username, password, full_name, email, address, phone)
        VALUES ('" . $_SESSION['username'] . "', '" . $_SESSION['password'] . "', '" . $_SESSION['full_name'] . "', '" . $_SESSION['email'] . "', '" . $_SESSION['address'] . "', '" . $_SESSION['phone'] . "')";

        $result = $connect->query($query);

        if ($result) {
            header('Location: login.php?success=Đăng ký thành công');
            exit;
        } else {
            echo "Lỗi khi thêm dữ liệu vào CSDL: " . $connect->error;
        }
    } else {        
        header('Location: check_otp.php?message_error="mã code không trùng khớp"');

    } 
} 
        


?>