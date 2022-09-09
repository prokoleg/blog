<?php

// Сортировка постов на главной
if (isset($_GET['by_id_alt'])) {
  $sort = "DESC";
  echo '<a href="?page=home&by_id"><img src="https://img.icons8.com/windows/32/000000/sort-numeric-up.png" alt="Новые снизу" title="Новые снизу"></a>';
} else {
  $sort = "ASC";
  echo '<a href="?page=home&by_id_alt"><img src="https://img.icons8.com/ios-glyphs/30/000000/numerical-sorting-12--v1.png" alt="Новые сверху" title="Новые сверху"></a>';
}

$database = new DbConn("SELECT id, header, description, post, autor, postdata FROM post ORDER BY id $sort");
$db = $database->ConnectionDb();
if ($db->num_rows > 0) {
  // output data of each row
  while($row = $db->fetch_assoc()) {

$post_id = $row['id'];
$header = $row['header'];
$description = $row['description'];
$post = $row['post'];
$autor = $row['autor'];
$postdata = $row['postdata'];
?>
<div class="col-md-12 content-page">

    <!-- Blog Post Start -->
   <div class="col-md-12 blog-post">
        <div class="post-title">
          <a href="?post<?php echo $post_id; ?>"><h1><?= $header; ?></h1></a>
        </div>  
        <div class="post-info">
        	<span><?= $postdata; ?> / <a href="#" target="_blank"><?= $autor;?></a></span>
        </div>  
        <p><?= $post; ?></p>                          			
        <a href="?post<?= $post_id; ?>" class="button button-style button-anim fa fa-long-arrow-right"><span>Read More</span></a>
    </div>
    <!-- Blog Post End -->
<?php
  }
  $db = $database->CloseDb();
} else {
  $header = "Новостей пока нет!";
}