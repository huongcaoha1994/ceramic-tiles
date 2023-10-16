
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/expertcorner.css">
    <title>Expertcorner</title>

</head>

<body>
<?php
include("./header.php");
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./main.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Expert Corner</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <h1>Expert Corner</h1>
        <div class="py-5 col-12 text-center ">
            <?php 
            include("../core/model/database.php");
            $item_per_page = 5 ;
            $total = "select count(*) as total from blogs ;" ;
            $result_total = $connect->query($total);
            if($result_total->num_rows > 0 ){
                $row = $result_total->fetch_assoc();
                $total_item = $row['total'];
            }
            $total_page = ceil($total_item / $item_per_page);
            $current_page = (isset($_GET['page'])) ? $_GET['page'] : 1 ;
            $current_page = max(1, min($current_page,$total_page));
            $start = ($current_page - 1 ) * $item_per_page + 1 ;
            $select_blog = "select * from blogs limit $start,$item_per_page ;";
            $result_blog = $connect->query($select_blog);{
                if($result_blog->num_rows > 0 ){
                    while($row = $result_blog->fetch_assoc()){
                        ?>
                       <a href="../view/blog_detail.php?blog_id=<?php echo $row['blog_id']; ?>" class=" text-decoration-none">
                        <div class=" mb-3 text-start" >
                                <div class="row">
                                    <div class="col-sm-4">
                                        <img src="<?php echo $row['image']; ?>" alt="" width="100%" height="300">
                                    </div>
                                    <div class="col-sm-8 text-start">
                                        <div class="card-body">
                                                <h5 class="card-title"><?php echo $row['title']; ?></h5>
                                                <h5><?php echo $row['created_date']; ?></h5>
                                        </div>
                                    </div>
                                </div>
                        </div>
                       </a>
                        
                            
                
                        <?php
                    }
                }
            }

                for($i = 1 ; $i <= $total_page ; $i++){
                echo "<a href='expertcorner.php?page=$i'> $i </a>" ;
            }
            ?>
            

            
        </div>
    </div>
</div>
      

<?php
include('./footer.php');
?>
</body>
</html>