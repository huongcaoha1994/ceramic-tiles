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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="boostrap/css/bootstrap.css">
    <link rel="stylesheet" href="SRC/assets/css/register.css">
    <title>Register</title>
</head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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
    <div class="container-fluid bg-info text-white">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="#" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="SRC/assets/img/homepage/logo.png" alt="" height="50">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-dark">Home</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Features</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Pricing</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
      </ul>

      <div class="col-md-3 text-end ">
        <button type="button" class="btn btn-warning"><a href="login.php" class="text-dark" style="text-decoration: none;">Login</a></button>
        <button type="button" class="btn btn-warning "><i class='bx bx-phone-call'></i></button>
      </div>
    </header>
  </div>
  <section class="h-100 bg-light">
    <div class="container py-3 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card card-registration my-4">
            <div class="row g-0">
              <div class="col-xl-6 d-none d-xl-block">
                <img src="SRC/assets/img/homepage/logo.png"
                  alt="Sample photo" class="img-fluid"
                  style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
              </div>
              <div class="col-xl-6">
                <div class="card-body p-md-5 text-black">
                  <h3 class="mb-5 text-uppercase text-center">Registration form</h3>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" name="username" placeholder="Username" id="form3Example1m" class="form-control form-control-lg"
                              value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>">
                          <?php if ($hasErrors) {
                              echo '<span class="error">' . $usernameErr . '</span>';
                          } ?>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="password" name="password" placeholder="Password" id="form3Example1m" class="form-control form-control-lg"
                              value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>">
                          <?php if ($hasErrors) {
                              echo '<span class="error">' . $passwordErr . '</span>';
                          } ?>
                      </div>
                    </div>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" name="full_name" placeholder="Full Name" id="form3Example8" class="form-control form-control-lg"
                              value="<?php echo isset($_POST['full_name']) ? $_POST['full_name'] : ''; ?>">
                          <?php if ($hasErrors) {
                              echo '<span class="error">' . $full_nameErr . '</span>';
                          } ?>
                  </div>

                  <div class="form-outline mb-4">
                  <input type="text" name="email" placeholder="Email ID" id="form3Example97" class="form-control form-control-lg"
                            value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
                        <?php if ($hasErrors) {
                            echo '<span class="error">' . $emailErr . '</span>';
                        } ?>
                  </div>

                  <div class="form-outline mb-4">
                  <input type="text" name="address" placeholder="Address" id="form3Example9" class="form-control form-control-lg"
                            value="<?php echo isset($_POST['address']) ? $_POST['address'] : ''; ?>">
                        <?php if ($hasErrors) {
                            echo '<span class="error">' . $addressErr . '</span>';
                        } ?>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" name="phone" placeholder="Phone" id="form3Example90" class="form-control form-control-lg" />
                            value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>">
                        <?php if ($hasErrors) {
                            echo '<span class="error">' . $phoneErr . '</span>';
                        } ?>
                  </div>

                

                  <div class="d-flex justify-content-end pt-3">
                    <button type="button" class="btn btn-light btn-lg">Reset all</button>
                    <button type="button" name="btn" class="btn btn-warning btn-lg ms-2">Submit form</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
      <!-- Copright -->
      <div class="text-white mb-3 mb-md-0">
        Ok Bro © 2023. Cera Tiles.
      </div>
      <!-- Copight -->

      <!-- Right -->
      <div>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="#!" class="text-white">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </div>
      <!-- Right -->
    </div>
</body>

</html>
