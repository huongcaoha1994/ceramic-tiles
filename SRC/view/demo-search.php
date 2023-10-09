<?php
// Mảng danh sách sản phẩm
$products = array(
    array(
        'name' => 'Sản phẩm 1',
        'image' => '../assets/img/image/1gach-eurotile-hod-d01-1.jpg'
    ),
    array(
        'name' => 'Sản phẩm 2',
        'image' => '../assets/img/image/1gach-eurotile-ngc-d04-1.jpg'
    ),
    array(
        'name' => 'Sản phẩm 3',
        'image' => '../assets/img/image/1gach-eurotitle-thd-04.jpg'
    )
);

// Xử lý yêu cầu tìm kiếm
if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];
    $filteredProducts = array_filter($products, function($product) use ($searchTerm) {
        return stripos($product['name'], $searchTerm) !== false;
    });

    // Hiển thị kết quả tìm kiếm
    if (!empty($filteredProducts)) {
        foreach ($filteredProducts as $product) {
            echo '<div class="product">';
            echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
            echo '<span>' . $product['name'] . '</span>';
            echo '</div>';
        }
    } else {
        echo 'Không tìm thấy sản phẩm phù hợp.';
    }
}
?>