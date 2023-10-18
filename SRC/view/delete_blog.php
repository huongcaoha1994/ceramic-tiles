<?php 
include("../core/model/database.php");
if(isset($_POST['delete_blog'])){
    $blog_id = $_POST['blog_id'];
    $delete_blog = "delete from blogs where blog_id = $blog_id ;" ;
    $result_delete = $connect->query($delete_blog);
    if($result_delete){
        echo "<script> alert ('delete blog successfully')</script>" ;
      header("location: Create_blog.php");
      exit;
    }
}
?>