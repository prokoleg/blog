                 <!-- Contact (Right Sidebar) Start -->
                 <div class="col-md-9">
                    <div class="col-md-12 page-body">
                    	<div class="row">
                    		
                            
                            <div class="sub-title">
                           		<h2>Вход</h2>
                                <a href="?page=home"><i class="icon-home"></i></a>
                             </div>
                            
                            
                            <div class="col-md-12 content-page">
                              <div class="col-md-12 blog-post">
                            	
                                
                                
                                <!-- Intro Start -->
                                <div class="post-title margin-bottom-10">
                                  <?php if(isset($_SESSION['login'])): ?>
                                   <h1>Здравствуйте <span class="main-color"><?= $_SESSION['login']; ?></span></h1>
                                 <?php endif;
                                if (!isset($_SESSION['login'])) {
                                  echo '<h1>Для входа введите <span class="main-color">логин</span> и <span class="main-color">пароль</span></h1>';
                                }
                                ?>
                                   </div> 
                                
<?php if(!isset($_SESSION['login'])): ?>
<form method="post">
<div class="form-group"><input type="text" name="login" class="form-control" placeholder="Логин"></div>
<div class="form-group"><input type="text" name="password" class="form-control" placeholder="Пароль"></div>
<button class="load-more-button">Войти</button>
</form>
<?php endif; ?>
<?php if(isset($_SESSION['login'])): ?>
  <h2>Теперь ты можешь размещать посты через <a href='?page=add'>форму добавления записей</a></h2>
<?php endif; ?>
  <?php
if ($_POST && isset($_POST['login']) && isset($_POST['password'])):

$login = $_POST['login'];
$password = $_POST['password'];
    
  $database = new DbConn("SELECT login, password FROM users WHERE role = '1'");
    $db = $database->ConnectionDb();
        if ($db->num_rows > 0) {
      // output data of each row
        while($row = $db->fetch_assoc()) {
        echo "<meta http-equiv='refresh' content='0; URL=".$_SERVER['REQUEST_URI']."'>";
        $_SESSION['login'] = $login;
      }
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
                         
                         </div>
                  <!-- Contact (Right Sidebar) End -->