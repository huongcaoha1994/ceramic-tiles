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
  <title>Send Mail</title>
  <style>
      :root {
  --primary-color: #f9ba11;
  --secondary-color: #d7d7d7;
      }
      

      body {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
      }



      footer{
        margin-bottom: 10px;
        height: 100px;
      }


      .divider:after,
      .divider:before {
      content: "";
      flex: 1;
      height: 1px;
      background: #eee;
      }
      

      @media (min-width: 768px) {
        body{
          font-size: 16px;
        }
        .container {
          width: 100%;
          height: 100%;
          font-size: 16px;
        }
      }
      
      /* Máy tính bảng */
      @media (min-width: 576px) and (max-width: 767px) {
      body {
        font-size: 14px;
      }
      }
      
      /* Điện thoại */
      @media (max-width: 575px) {
      body {
        font-size: 12px;
      }
      }
  </style>
</head>
<body>
<!-- tạo form gửi code qua mail -->
<form action="" method="POST" style="margin-top: 200px;">
  <div class="row">
    <div class="col-12 col-sm-8 col-md-6 m-auto d-flex flex-row align-items-center justify-content-center">
      <div class="card">
        <div class="card-body">
          <form action="" method="post">
            <label for="send">Nhập mã</label>
            <input type="text" name="" id="" class="form-control my-3 py-2">
            <div class="text-center mt-3">
              <button class="btn btn-warning"><a href="#"></a>Nhập</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</form>
</body>
</html>