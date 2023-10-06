<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/login.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <title>Login</title>
</head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <body>
    <?php
    session_start(); 
    if (isset($_GET['success'])) {
        ?>
        <span style="color:green;">
        <?php echo "<script> alert ('".$_GET['success']."')</script>"; ?>
        </span>
        <?php
    }
    ?>
    <div class="container-fluid bg-warning text-white">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="#" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="../../assets/img/homepage/logo.png" alt="" height="50">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-dark">Home</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Features</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Pricing</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
      </ul>

      <div class="col-md-3 text-end ">
        <input type="button" class="btn btn-warning "><a href="register.php" class="text-dark">Sign Up</a></input>
        <input type="button" class="btn btn-warning "><a href="#"></a><i class='bx bx-phone-call'></i></input>
      </div>
    </header>
  </div>
  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-4 col-xl-3">
        <img src="../../assets/img/homepage/logo.png"
          class="img-fluid" alt="Sample image">
      </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="" method="POST">
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <p class="lead fw-normal mb-0 me-3">Sign in with</p>
              <input type="button" class="btn btn-warning btn-floating mx-1">
              <i class='bx bxl-meta' ></i>
              </input>

              <input type="button" class="btn btn-warning btn-floating mx-1 ">
                <i class="fab fa-twitter"></i>
              </input>

              <input type="button" class="btn btn-warning btn-floating mx-1 ">
                <i class="fab fa-linkedin-in"></i>
              </input>
            </div>

            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0">Or</p>
            </div>

            <!-- Username input -->
            <div class="form-outline mb-4">
              <input type="text" name="username" id="form3Example3" class="form-control form-control-lg" placeholder="Username" />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="password" id="myInput" name="password" class="form-control form-control-lg" placeholder="Enter password" />
              <i class='bx bxs-low-vision' onclick="myFunction()"></i>
            </div>

            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                  Remember me
                </label>
              </div>
              <a href="#!" class="text-body">Forgot password?</a>
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
              <input type="button" name="btn" class="btn btn-warning btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</input>
              <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.php"
                  class="link-danger">Register</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-secondary">
      <!-- Copyright -->
      <div class="text-white mb-3 mb-md-0">
        Ok Bro © 2023. Cera Tiles.
      </div>
      <!-- Copyright -->

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
  </section>

    <?php 
    include "./database.php";
    if (isset($_POST["btn"])) {
        if (empty($_POST['username'])
            || empty($_POST['password'])) {
                echo "<script> alert ('Username and password are required')</script>";
        } else {
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $sql = "SELECT user_id, username, password FROM users";

            $result = $connect->query($sql);
            if ($result->num_rows > 0) {
                while ($data = $result->fetch_assoc()) {    
                    $db_username = $data['username'];
                    $db_password = $data['password'];
                    $user_id = $data['user_id'];
                }    
                if ($username === $db_username && password_verify($password, $db_password)) {
                    echo "<script> alert ('Logged in successfully')</script>";
                    $_SESSION['username'] = $username;
                    $_SESSION['user_id'] = $user_id;
                    header("location: ../View/main.php");
                } else {
                    echo "<script> alert ('Username or password is incorrect')</script>";
                }     
                
            }

            $connect->close();
        }
    }
    ?>
    <script>
    function myFunction() {
      var x = document.getElementById("myInput");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    </script>
</body>
</html>

/