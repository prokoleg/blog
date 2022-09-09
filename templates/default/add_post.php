<?php if(isset($_SESSION['login'])): ?>
                 <!-- Contact (Right Sidebar) Start -->
                 <div class="col-md-9">
                    <div class="col-md-12 page-body">
                    	<div class="row">
                    		
                            
                            <div class="sub-title">
                           		<h2>Добавление новости</h2>
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
                  <input type="text" name="pagename" class="form-control" placeholder="Имя страницы">
                  </div>
                  <div class="form-group">
                  <input type="text" name="title" class="form-control" placeholder="Заголовок">
                  </div>
                  <div class="form-group">
                  <input type="text" name="description" class="form-control" placeholder="Description">
                  </div>
                  <textarea name="content"></textarea><br />
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
if ($_POST){
  $page = new WriteContent($_POST['pagename'], $_POST['title'], $_POST['description'], $_POST['content']);
  echo $page->putPage();
}

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