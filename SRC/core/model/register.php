<?php 
include '../PHPMailer/src/PHPMailer.php';
include '../PHPMailer/src/Exception.php';
include '../PHPMailer/src/OAuthTokenProvider.php';
include '../PHPMailer/src/POP3.php';
include '../PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true); // Passing `true` enables exceptions

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Register</title>

    <style>
        .error {
            color: orangered;
            font-weight: bold;
            padding-left: 30px;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    include 'database.php';
    $usernameErr = $passwordErr = $full_nameErr = $emailErr = $addressErr = $phoneErr = "";
    $username = $password = $full_name = $email = $address = $phone = "";
    $hasErrors = false; // Biến để kiểm tra có lỗi hay không
    
    //xử lí dữ liệu nhập vào làm cho nó an toàn hơn
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (isset($_POST["btn"])) {
        $hasErrors = true; // Đã ấn nút "Đăng ký"
    
        $username = test_input($_POST['username']);
        $password = password_hash(test_input($_POST['password']), PASSWORD_DEFAULT);
        $full_name = test_input($_POST['full_name']);
        $email = test_input($_POST['email']);
        $address = test_input($_POST['address']);
        $phone = test_input($_POST['phone']);

        //validate dữ liệu nhập vào
        if (empty($username)) {
            $usernameErr = "Username is required";
        }
        $check_username = "SELECT * FROM users WHERE username = '$username'";
        $check_email = "SELECT * FROM users WHERE email = '$email'";
        $rs_username = $connect->query($check_username);
        $rs_email = $connect->query($check_email);
        if ($rs_username->num_rows > 0) {
            $usernameErr = "Username already exists";
        }
        if (empty($_POST['password'])) {
            $passwordErr = "Password is required";
        }
        if (empty($full_name)) {
            $full_nameErr = "Full name is required";
        }
        if (empty($email)) {
            $emailErr = "Email is required";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email";
        } else if ($rs_email->num_rows > 0) {
            $emailErr = "Email already exists";
        }
        if (empty($address)) {
            $addressErr = "Address is required";
        }
        if (empty($phone)) {
            $phoneErr = "Phone is required";
        }

        //thêm dữ liệu vào database
        if (empty($usernameErr) && empty($passwordErr) && empty($full_nameErr) && empty($emailErr) && empty($addressErr) && empty($phoneErr)) {
        
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['full_name'] = $full_name;
            $_SESSION['email'] = $email;
            $_SESSION['address'] = $address;
            $_SESSION['phone'] = $phone;

        global $randomNumber;
    
        $randomNumber = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
        $_SESSION['randomNumber'] = $randomNumber ;
           
            try {
                //Server settings
                $mail->SMTPDebug = 0; // Enable verbose debug output
                $mail->isSMTP(); // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com  '; // Specify main and backup SMTP servers
                $mail->SMTPAuth = true; // Enable SMTP authentication
                $mail->Username = 'longthanh937@gmail.com'; // SMTP username
                $mail->Password = 'cfoazwqqwdrygnmc'; // SMTP password
                $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587; // TCP port to connect to
            
                //Recipients
                $mail->setFrom('longthanh937@example.com', 'Mailer');
                $mail->addAddress($_SESSION['email'], $_SESSION['username']); // Add a recipient
                // $mail->addAddress('ellen@example.com');               // Name is optional
                // $mail->addReplyTo('info@example.com', 'Information');
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');
            
                // //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            
                //Content
                $mail->isHTML(true); // Set email format to HTML
                $mail->Subject = 'TILES-LUXURY';
                $mail->Body = '<p style="font-size: 20px;">Welcome to TILES-LUXURY! </p>        
                Your verification code is <b>' . $_SESSION['randomNumber'] .'<b>';
                // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            
                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }

        header('Location: check_otp.php');
        }
    }
    ?>


    <?php $connect->close();
    ?>
    <div class="wrapper">
        <h1>Register</h1>
        <form action="" method="POST">
            <div class="input-box">
                <input type="text" name="username" placeholder="Username"
                            value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>">
                            <i class='bx bx-user-circle'></i>
                        <?php if ($hasErrors) {
                            echo '<span class="error">' . $usernameErr . '</span>';
                        } ?>
            </div>
            <div class="input-box">
            <input type="password" name="password" placeholder="Password"
                            value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>">
                        <?php if ($hasErrors) {
                            echo '<span class="error">' . $passwordErr . '</span>';
                        } ?>
            </div>
            <div class="input-box">
                <input type="text" name="full_name" placeholder="Full Name"
                            value="<?php echo isset($_POST['full_name']) ? $_POST['full_name'] : ''; ?>">
                            <i class='bx bxs-rename' ></i>
                        <?php if ($hasErrors) {
                            echo '<span class="error">' . $full_nameErr . '</span>';
                        } ?>
            </div>
            <div class="input-box">
                <input type="text" name="email" placeholder="Email"
                            value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
                            <i class='bx bxl-gmail' ></i>
                        <?php if ($hasErrors) {
                            echo '<span class="error">' . $emailErr . '</span>';
                        } ?>
            </div>
            <div class="input-box">
                <input type="text" name="address" placeholder="Address"
                            value="<?php echo isset($_POST['address']) ? $_POST['address'] : ''; ?>">
                            <i class='bx bxs-map'></i>
                        <?php if ($hasErrors) {
                            echo '<span class="error">' . $addressErr . '</span>';
                        } ?>
            </div>
            <div class="input-box">
                <input type="text" name="phone" placeholder="Phone"
                            value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>">
                            <i class='bx bxs-phone'></i>
                        <?php if ($hasErrors) {
                            echo '<span class="error">' . $phoneErr . '</span>';
                        } ?>
            </div>
                <input type="submit" name="btn" class="btn" value="Register">
        </form>
    </div>
</body>

</html>
