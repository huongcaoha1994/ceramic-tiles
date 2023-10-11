<?php
include("database.php");
if (isset($_GET['blog_id'])) {
    $blog_id = htmlspecialchars($_GET['blog_id']);
    $select_blog = "select * from blogs where blog_id = $blog_id order by blog_id DESC ;";
    $result_blog = $connect->query($select_blog);
    if ($result_blog->num_rows > 0) {
        $row = $result_blog->fetch_assoc();
?>
        
<?php

    } else {
        echo "<h2>Không có bài viết nào cả !</h2>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../assets/css/blog_detail.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    
</head>
<body>
        <div class="card mb-3">
                <img src="../<?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>">
            <div class="card-body">
                <h3 class="card-title"><?php echo $row['title']; ?></h3>
                <p class="card-text"><?php echo $row['content']; ?></p>
                <p class="card-text"><small class="text-muted">Người viết bài :<?php echo $row['author']; ?></small></p>
                <p class="card-text"><small class="text-muted">Ngày đăng :<?php echo $row['created_date']; ?></small></p>

            </div>
        </div>
            

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>