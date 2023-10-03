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
    <title>Document</title>
    <style>
        .random {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
            background-color: rgb(119, 130, 130);
          }
          
          .random-box {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
          }
          
          input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
          }
          
          input[type="submit"] {
            background-color: #000;
            color: #fff;
            padding: 10px;
            border: none;
            cursor: pointer;
          }
        </style>
</head>
<body>
<!-- tạo form gửi code qua mail -->
<div class="random">
        <p>Enter code from your email:</p>
        <form action="check_otp_process.php" method="POST">
        <div class="random-box">
            <input type = "number" name="code" required>
        </div>
        <div class="random-box">
        <input type="submit" name="send_code" value="Verify">
        </div>
        </form>
        </div>
</body>
</html>