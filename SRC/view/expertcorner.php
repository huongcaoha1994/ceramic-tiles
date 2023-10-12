<?php
include("./header.php");
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Expert Corner</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Expert Corner</h1>
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
                            <a href="">
                                <img src="<?php echo $row['image']; ?>" alt="" width="300" height="300">
                                <h3><?php echo $row['title']; ?></h3>
                                <h4><?php echo $row['created_date']; ?></h4>
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