<!-- xử lý dữ liệu từ form gửi đến -->
<?php
include("database.php");

$product_id = $_GET['product_id'];

function clean_data($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data);
    return $data;
}
$nproduct_name = clean_data($_POST['nproduct_name']);
$nprice = clean_data($_POST['nprice']);
$ncolor = clean_data($_POST['ncolor']);
$ninventory = clean_data($_POST['ninventory']);
$nparent_category = clean_data($_POST['nparent_category']);
$nchild_category = clean_data($_POST['nchild_category']);
$ncategory = $nparent_category . $nchild_category;
$nbrand = clean_data($_POST['nbrand']);
$nsize = clean_data($_POST['nsize']);
$ndescription = clean_data($_POST['ndescription']);
$photo_new = $_FILES['nimage'];
// xử lý hình ảnh và lưu ảnh vào folder
if ($photo_new['size'] > 0) { //nếu không tải lên ảnh mới thì size = 0
    $file_save = "../assets/img/image/";
    $file_name = $file_save . basename($_FILES['nimage']['name']);
    $style_file = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $upload_oke = true;
    if (file_exists($file_name)) {
        $i = 1;
        while (file_exists($file_name)) {
            $file_name = $file_save . $i . basename($_FILES['nimage']['name']);
            $i++;
        }
    }
    if ($style_file == "png" || $style_file == "jpeg" || $style_file == "jpg" || $style_file == "gif") {
        $upload_oke = true;
    } else {
        $upload_oke = false;
    }
    if ($upload_oke) {
        if (move_uploaded_file($_FILES['nimage']['name'], $file_name)) {
            echo "change image success";
        } else {           
            header('Location: ../../view/update_product_info.php?product_id=' . $product_id . '&message_error=Upload file must be png,jpeg,jpg or gif !');
        }
    }
} else {
    $file_name = clean_data($_POST['photo_old']);
}

//    update vào bảng product

$update_product = "update products
                    set image = '$file_name',
                        product_name = '$nproduct_name',
                        price = $nprice,
                        color = '$ncolor',
                        inventory = '$ninventory',
                        category_id = $ncategory,
                        brand = '$nbrand',
                        size = '$nsize',
                        description = '$ndescription'
                    where product_id = $product_id";
$update_rs = $connect->query($update_product);
if ($update_rs) {
    $message_success1 = "Update product successfully!";
    echo "<script> alert ('$message_success1')</script>";
} else {
    $message_error1 = "Update product failed!";
    echo "<script> alert ('$message_error1')</script>";
}

header('Location: ../../view/update_product_info.php?product_id=' . $product_id . '&up_success=Update product successfully!');

$connect->close();
?>