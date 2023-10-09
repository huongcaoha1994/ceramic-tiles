<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tìm kiếm sản phẩm</title>
    <style>
        .product {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        
        .product img {
            width: 100px;
            height: 100px;
            margin-right: 10px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Gửi yêu cầu tìm kiếm khi người dùng nhập từ khóa
            $('#search').on('input', function() {
                var searchTerm = $(this).val();
                if (searchTerm.length >= 3) {
                    $.ajax({
                        url: 'search.php',
                        method: 'POST',
                        data: { search: searchTerm },
                        success: function(response) {
                            $('#search-results').html(response);
                        }
                    });
                } else {
                    $('#search-results').empty();
                }
            });
        });
    </script>
</head>
<body>
    <!-- Form tìm kiếm sản phẩm -->
    <form>
        <input type="text" id="search" placeholder="Nhập tên sản phẩm">
    </form>
    
    <!-- Kết quả tìm kiếm -->
    <div id="search-results"></div>
</body>
</html>