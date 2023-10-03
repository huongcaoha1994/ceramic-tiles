<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
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
    <div class="wrapper">
        <form action="login.php" method="POST">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" name="username" require>
                <i class='bx bx-user'></i>
            </div>

            <div class="input-box">
                <input type="password" placeholder="Password" name="password" require>
                <i class='bx bx-lock' ></i>
            </div>

            <button type="submit" name="btn" class="btn">Login</button>

            <div class="register"><p>Don't have an account?<a href="register.php">Register</a></p></div>

        </form>
    </div>

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
</body>
</html>