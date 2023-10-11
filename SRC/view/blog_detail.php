
<?php
include("../core/model/database.php");
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
    <link rel="stylesheet" href="../assets/css/blog_detail.css">
    <title>Document</title>
</head>
<body>
    <?php 
        include('./header.php')
    ?>

    <div class="card mb-3">
        <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>">
        <div class="card-body">
            <h3><?php echo $row['title']; ?></h3>
            <p class="card-text"><?php echo $row['content']; ?></p>
            <p class="card-text"><small class="text-muted">
                <h5>Người viết bài :<?php echo $row['author']; ?></h5>
                <h5>Ngày đăng :<?php echo $row['created_date']; ?></h5>
            </small></p>
        </div>
    

    <?php 
    include('./footer.php')
    ?>
</body>
</html>

