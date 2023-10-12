<?php
include("../core/model/database.php");
$products = [] ;
$select_product = "select * from products ;";
$result_product = $connect->query($select_product);
if($result_product->num_rows > 0){
    while($row = $result_product->fetch_assoc()){
        $products[] = 
            array(
                'id' => $row['product_id'],
                'name' => $row['product_name'],
                'image' => '../assets/img/'.$row['image'] ,
                'size' => $row['size'] ,
                'price' => $row['price'],
                'color' => $row['color'] 
            );
    }
}

// Xử lý yêu cầu tìm kiếm
if (isset($_POST['search1'])) {
    $searchTerm = strval($_POST['search1']);
    $filteredProducts = array_filter($products, function($product) use ($searchTerm) {
        return 
            stripos($product['name'], $searchTerm) !== false ||
            stripos($product['size'], $searchTerm) !== false ||
            stripos($product['price'], $searchTerm) !== false ||
            stripos($product['color'], $searchTerm) !== false;
    });

    // Hiển thị kết quả tìm kiếm
    if (!empty($filteredProducts)) {
        foreach ($filteredProducts as $product) {
            echo "<div>";
            echo "<a href='sosanh.php?sp1=" . $product['id'] . "'>";
            echo '<img src="'.$product['image'].'" alt="' . $product['name'] . '" width="100" height="100">';
            echo '<span>|' . $product['name'] . '|</span>';
            echo "</a>";
            echo '</div>';
        }
    } else {
        echo 'Không tìm thấy sản phẩm phù hợp.';
    }
}
else if (isset($_POST['search2'])) {
    $searchTerm = strval($_POST['search2']);
    $filteredProducts = array_filter($products, function($product) use ($searchTerm) {
        return 
            stripos($product['name'], $searchTerm) !== false ||
            stripos($product['size'], $searchTerm) !== false ||
            stripos($product['price'], $searchTerm) !== false ||
            stripos($product['color'], $searchTerm) !== false;
    });

    // Hiển thị kết quả tìm kiếm
    if (!empty($filteredProducts)) {
        foreach ($filteredProducts as $product) {
            echo "<div>";
            echo "<a href='sosanh.php?sp2=" . $product['id'] . "'>";
            echo '<img src="'.$product['image'].'" alt="' . $product['name'] . '" width="100" height="100">';
            echo '<span>|' . $product['name'] . '|</span>';
            echo "</a>";
            echo '</div>';
        }
    } else {
        echo 'Không tìm thấy sản phẩm phù hợp.';
    }
}


?>

