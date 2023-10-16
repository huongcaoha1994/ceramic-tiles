<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/Create_blog.css">
    <title>Create_blog</title>
</head>
<body>
    <?php
        include("header.php");
    ?>
    <div class="container">

   
    <form action="" method="POST" enctype="multipart/form-data" class="contac">
        <h2>Create Blog Post</h2>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title :</label>
            <input type="text" name="title" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Content :</label>
            <textarea class="form-control" name="content" id="content" cols="60" rows="10"></textarea>
        </div>
        <div class="mb-3">
            <input type="file" name="image">
        </div>
        <div class="mb-3" style="text-align:end;">
            <input class="Create" type="submit" name="create_blog" value="Create">
        </div>
        
    </form>
 </div>


 

    <?php 
    include("../core/model/database.php");
    if(isset($_POST['create_blog'])){
        function clean_data($data){
            $data = trim($data) ;
            $data = htmlspecialchars($data);
            return $data ;
        }
        $title = clean_data($_POST['title']) ;
      
       $content = clean_data($_POST['content']) ;
        // xử lý hình ảnh và lưu ảnh vào foder
        if(isset($_FILES['image'])){
            $file_save = "../assets/img/image/";
            $taget_file = $file_save.basename($_FILES['image']['name']) ;
            $style_file = strtolower(pathinfo($taget_file,PATHINFO_EXTENSION)) ;
            $upload_oke = true ;
            if(file_exists($taget_file)){
                $i = 1 ;
                while(file_exists($taget_file)){
                    $taget_file = $file_save.$i.basename($_FILES['image']['name']) ;
                    $i++ ;
                }
            }
            if($style_file == "png" || $style_file == "jpeg" || $style_file == "jpg" || $style_file == "gif"){
                $upload_oke = true ;
            }
            else {            
                $upload_oke = false ;
            }
           if($upload_oke){
            if(move_uploaded_file($_FILES['image']['tmp_name'],$taget_file)){
                echo "save image success" ;
            }
           }
           else {
            $message_error = "file upload phải là png,jpeg,jpg,gif !" ;
            echo "<script> alert ('$message_error')</script>" ;
            return ;
           }

        //    insert vào bảng product
           $insert_blog = "insert into blogs (image,title,content)
           values ('$taget_file','$title','$content');";
           $result_insert = $connect->query($insert_blog) ;
           if($result_insert){
            $message_success1 = "Thêm blog thành công !" ;
            echo "<script> alert ('$message_success1')</script>" ;
            $title = "" ;
            $content = "";
           
           }
           else {
            $message_error1 = "thêm blog không thành công !" ;
            echo "<script> alert ('$message_error1')</script>" ;
           }
        }

    }
    ?>
    <?php
        include("footer.php");
    ?>
</body>
</html>
