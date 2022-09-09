<?php
$page = new Content(1);
//echo $page->getPage();
// var_dump($page->getPage());
?>
                 <!-- About Me (Right Sidebar) Start -->
                 <div class="col-md-9">
                    <div class="col-md-12 page-body">
                    	<div class="row">
                    		
                            
                            <div class="sub-title">
                           		<h2><?php echo $page->getTitle(); ?></h2>
                                <a href="?page=contact"><i class="icon-envelope"></i></a>
                             </div>
                            
                            
                            <div class="col-md-12 content-page">
                              <div class="col-md-12 blog-post">
                            	
<?php echo $page->getContent(); ?>
                                  
                                </div>  
                                
                                  <div class="col-md-12 text-center">
                                    <a href="?page=contact" data-toggle="tooltip" data-placement="top" title="Visit on my contact page for hire me." class="load-more-button">Hire</a>
                                   </div>
                                  
                             </div>
                              
                         </div>
                         
                        
                        
<?php include 'subscribe.php'; ?>
                           
                           
                         </div>
                  <!-- About Me (Right Sidebar) End -->