<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include("database.php");
        if(isset($_GET['blog_id'])){
            $blog_id = htmlspecialchars($_GET['blog_id']);
            $select_blog = "select * from blogs where blog_id = $blog_id order by blog_id DESC ;";
            $result_blog = $connect->query($select_blog);
            if($result_blog->num_rows > 0 ){
               $row = $result_blog->fetch_assoc();
                    ?>
                        <div>
                            <img src="../<?php echo $row['image'] ;?>" alt="<?php echo $row['title'] ;?>">
                            <h3><?php echo $row['title'] ;?></h3>
                            <h4><?php echo $row['content'] ;?></h4>
                            <h5>Người viết bài :<?php echo $row['author'] ;?></h5>
                            <h5>Ngày đăng :<?php echo $row['created_date'] ;?></h5>
                        </div>
                        <p>__________________________________________________________________________________________________________________</p>
                    <?php
               
            }
            else {
                echo "<h2>Không có bài viết nào cả !</h2>";
            }
        }
    ?>
</body>
</html>