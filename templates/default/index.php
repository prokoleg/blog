<!DOCTYPE html>
<html lang="ru">

  <head>
    
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO -->
    <meta name="description" content="">
    <meta name="author" content="uipasta">
    <!-- <meta name="url" content="http://www.yourdomainname.com"> -->
    <meta name="copyright" content="company name">
    <meta name="robots" content="index,follow">
    
    
    <title><?= SITENAME; ?></title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="templates/default/images/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="templates/default/images/favicon/apple-touch-icon.png">
    
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="templates/default/css/plugin.css?v=<?php echo rand(1, 10); ?>&rev=<?php echo rand(999, 10000); ?>">
    
    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="templates/default/css/style.css?v=<?php echo rand(1, 10); ?>&rev=<?php echo rand(999, 10000); ?>">
    
    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
    
    <script src="https://cdn.tiny.cloud/1/1b21355f0u8xb4r0g4a6sufuqj8ywgh25lj0orj1j7vj4h7d/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    
    <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    

  </head>

 <body>

	
     
	 <!-- Preloader Start -->
     <div class="preloader">
	   <div class="rounder"></div>
      </div>
      <!-- Preloader End -->
      
      
    
    
    <div id="main">
        <div class="container">
            <div class="row">
            	
               
                 
                 <!-- About Me (Left Sidebar) Start -->
                 <div class="col-md-3">
                   <div class="about-fixed">
                    
                     <div class="my-pic">
                        <?php //if (isset($_SESSION['login'])): ?>
                            <img src="templates/default/images/pic/autor.jpg" alt="">
                        <?php //endif; ?>
                        <!--
                        <?php if (empty($_SESSION['login'])): ?>
                            <img src="templates/default/images/pic/autor_low.jpg" alt="">
                        <?php endif; ?>
                      -->
                        <a href="javascript:void(0)" class="collapsed" data-target="#menu" data-toggle="collapse"><i class="icon-menu menu"></i></a>
                         <div id="menu" class="collapse">
                           <ul class="menu-link">
<?php
if (empty($_SESSION['login'])) {
  $database = new DbConn("SELECT link, page FROM pages WHERE link!='logout' AND link !='single' AND navlink = 'on'");
} elseif (isset($_SESSION['login'])) {
  $database = new DbConn("SELECT link, page FROM pages WHERE link!='login' AND link !='single'");
}
$db = $database->ConnectionDb();
if ($db->num_rows > 0) {
  // output data of each row
  while($row = $db->fetch_assoc()) {
echo "<li><a href='?page={$row['link']}'>{$row['page']}</a></li>";
  }
  $db = $database->CloseDb();
} else {
  echo "Нет разделов";
}
?>
                            </ul>
                         </div>
                        </div>
                      
                      
                      
                      <div class="my-detail">
                    	
                        <div class="white-spacing">

                            <h1><?= $autor; ?></h1>
                            <span><?= $work; ?></span>
                        </div> 
                       
                       <ul class="social-icon">
                         <li><a href="#" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                         <li><a href="#" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="#" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                         <li><a href="#" target="_blank" class="github"><i class="fa fa-github"></i></a></li>
                         <li><a href="#" target="_blank" class="vk"><i class="fa fa-vk"></i></a></li>
                         <li><a href="#" target="_blank" class="google"><i class="fa fa-google"></i></a></li>
                         <li><a href="#" target="_blank" class="youtube"><i class="fa fa-youtube"></i></a></li>
                         <li><a href="#" target="_blank" class="email"><i class="fa fa-envelope-open-o"></i></a></li>
                        </ul>

                    </div>
                  </div>
                </div>
                <!-- About Me (Left Sidebar) End -->
                
               <!-- header stop -->

<!-- Подгрузка страниц -->                
<?php UrlPage::Url(); ?>
<!-- Подгрузка страниц -->                
<?php

if ($_GET && $_GET['page'] == 'logout') {
  session_destroy();
  echo "<h2>Вы вышли!</h2>";
  echo "<meta http-equiv='refresh' content='0; URL=".HOMEURL."'>";
} else {

include 'copyright.php';

}
?>
                     
                  </div>
                
            </div>
         </div>
      </div>
    
    
    
    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
    <!-- Back to Top End -->
    
    
    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="templates/default/js/jquery.min.js"></script>
    <script type="text/javascript" src="templates/default/js/plugin.js"></script>
    
    <!-- Main Javascript File  -->
    <script type="text/javascript" src="templates/default/js/scripts.js"></script>

    
   </body>
 </html>
