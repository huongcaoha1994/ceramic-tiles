<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo mới đơn hàng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        
        h1 {
            text-align: center;
        }
        
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
        }
        
        input[type="text"], select {
            width: 100%;
            padding: 5px;
        }
        
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Tạo mới đơn hàng</h1>
    <form action="https://sandbox.vnpayment.vn/tryitnow/Home/CreateOrder" method="post">
        <label for="loaihanghoa">Loại hàng hóa</label>
        <select id="loaihanghoa" name="loaihanghoa">
            <option value="Nạp tiền điện thoại">Nạp tiền điện thoại</option>
            <option value="Thanh toán hóa đơn">Thanh toán hóa đơn</option>
            <option value="Thời trang">Thời trang</option>
        </select>
        
        <label for="sotien">Số tiền</label>
        <input type="text" id="sotien" name="sotien">
        
        <label for="noidung">Nội dung thanh toán</label>
        <input type="text" id="noidung" name="noidung">
        
        <label for="nganhang">Ngân hàng</label>
        <select id="nganhang" name="nganhang">
            <option value="">Không chọn</option>
            <option value="Ung dung MobileBanking">Ung dung MobileBanking</option>
            <option value="VNPAYQR">VNPAYQR</option>
            <option value="LOCAL BANK">LOCAL BANK</option>
            <!-- Thêm các lựa chọn ngân hàng khác -->
        </select>
        
        <label for="ngonngu">Ngôn ngữ</label>
        <select id="ngonngu" name="ngonngu">
            <option value="Tiếng Việt">Tiếng Việt</option>
            <option value="English">English</option>
        </select>
        
        <button type="submit">Thanh toán Redirect</button>
    </form>
</body>
</html>