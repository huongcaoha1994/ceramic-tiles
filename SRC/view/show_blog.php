<?php
include("../core/model/database.php");


$select_blog = "select * from blogs order by blog_id DESC ;";
$result_blog = $connect->query($select_blog);
if ($result_blog->num_rows > 0) {
  while ($row = $result_blog->fetch_assoc()) {


?>
    <div class="item">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static" >
          <h3 class="mb-0"><?php echo $row['title']; ?></h3>
          <div class="mb-1 text-body-secondary"><?php echo $row['created_date']; ?></div>
          <p class="card-text mb-auto"></p>
          <a href="../view/blog_detail.php?blog_id=<?php echo $row['blog_id']; ?>" class="icon-link gap-1 icon-link-hover stretched-link">
            Continue reading
            <svg class="bi">
              <use xlink:href="#chevron-right" />
            </svg>
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <!-- <svg class="bd-placeholder-img" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
          </svg> -->
          <img src="<?php echo $row['image']; ?>" alt=""  class="blog-img-fixed img-background">

        </div>
      </div>
    </div>
<?php

  }
}
?>