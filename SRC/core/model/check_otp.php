<?php 
session_start();
if (isset($_GET['message_error'])) {
  echo "<script> alert ('{$_GET['message_error']}')</script>" ;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="../../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../../assets/css/createproduct.css">
  <title>Login</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <title>Send Mail</title>
</head>
<body>
<div class="container-fluid bg-warning text-white">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="#" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="../../assets/img/homepage/logo.png" alt="" height="50">
      </a>
      <ul>
      <li><a href="../../view/main.php" class="nav-link px-2 link-dark">Home</a></li>
        <li><a href="../../view/admin.php" class="nav-link px-2 link-dark">Admin</a></li>
        <li><a href="../../view/shop.php" class="nav-link px-2 link-dark">Shop</a></li>
        <li><a href="../../view/home.php" class="nav-link px-2 link-dark">View</a></li>
        <li><a href="../../view/best_sale.php" class="nav-link px-2 link-dark">Sale</a></li>
      </ul>

      <div class="col-md-3 text-end ">
        <button type="submit" class="btn btn-warning "><a href="register.php" class="text-dark" style="text-decoration: none;">Sign Up</a></button>
        <button type="submit" class="btn btn-warning "><i class='bx bx-phone-call'></i></button>
      </div>
    </header>
  </div>
  <!-- tạo form gửi code qua mail -->
<form action="check_otp_process.php" method="POST" style="margin-top: 200px;">
  <div class="row">
    <div class="col-12 col-sm-8 col-md-6 m-auto d-flex flex-row align-items-center justify-content-center">
      <div class="card">
        <div class="card-body">
          <form action="" method="post">
            <label for="send">Nhập mã</label>
            <input type="text" name="code" id="" class="form-control my-3 py-2">
            <div class="text-center mt-3">
              <button class="btn btn-warning send_code" name="send_code "><a href="#">
              </a>Nhập</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</form>
  <footer class="position-fixed footerlogin">
    <div class="d-flex flex-md-row text-center text-md-start justify-content-around !important bg-secondary py-3">
          <div class="text-white mb-3 mb-md-0">
            Ok Bro © 2023. Cera Tiles.
          </div>
          <div>
            <a href="#!" class="text-white me-4 text-decoration-none">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#!" class="text-white me-4 text-decoration-none">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#!" class="text-white me-4 text-decoration-none">
              <i class="fab fa-google"></i>
            </a>
            <a href="#!" class="text-white">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </div>
  </footer>
</body>
</html>