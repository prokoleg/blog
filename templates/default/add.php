<?php if(isset($_SESSION['login'])): ?>
                 <!-- Contact (Right Sidebar) Start -->
                 <div class="col-md-9">
                    <div class="col-md-12 page-body">
                    	<div class="row">
                    		
                            
                            <div class="sub-title">
                           		<h2>Добавление/редактирование новости</h2>
                                <a href="?page=home"><i class="icon-home"></i></a>
                             </div>
                            
                            
                            <div class="col-md-12 content-page">
                              <div class="col-md-12 blog-post">
                            	
                                
                                
                                <!-- Intro Start -->
                              <!--  <div class="post-title margin-bottom-10">
                                   <h1>Looking for a <span class="main-color">online presence</span>?</h1>
                                   </div> -->
                                   
                <form method="post">
                  <div class="form-group">
                  <input type="text" name="header" class="form-control" placeholder="Заголовок">
                  </div>
                  <div class="form-group">
                  <input type="text" name="description" class="form-control" placeholder="Description">
                  </div>
                  <textarea name="post"></textarea><br />
                  <button class="load-more-button">Save</button>
                </form>
                  <script>
                    tinymce.init({
                      selector: 'textarea',
                      plugins: 'advlist autolink lists link image charmap preview anchor pagebreak autoresize autosave',
                      toolbar_mode: 'floating',
                      default_link_target: '_blank',
                      autosave_interval: '20s',
                    content_langs: [
                      { title: 'Русский', code: 'ru' }
                    ]
                    });
                  </script>

  <?php
if ($_POST):
$header = $_POST['header'];
$description = $_POST['description'];
$post = $_POST['post'];
$autor = $_SESSION['login'];

$database = new DbConn("ALTER TABLE post AUTO_INCREMENT=0");
$db = $database->ConnectionDb();
  if ($db === TRUE) {
    
  $database = new DbConn("INSERT INTO post (header, description, post, autor) VALUES ('".$header."', '".$description."', '".$post."', '".$autor."')");
    $db = $database->ConnectionDb();
  }
  if ($db === FALSE) {
    echo "Error<br>" . $db->error;
  }
$db = $database->CloseDb();

endif;

  ?>
                                
                         
                         </div>
                        </div>
                       </div>
                         
<?php //include 'subscribe.php'; ?>

                         </div>
                  <!-- Contact (Right Sidebar) End -->
<?php endif; ?>
<?php if(empty($_SESSION['login'])) {
echo "<meta http-equiv='refresh' content='0; URL=".HOMEURL."?page=login'>";
}