                       <!-- Footer Start -->
                       <div class="col-md-12 page-body margin-top-50 footer">
                          <footer>
                          <ul class="menu-link">
<?php
if (empty($_SESSION['login'])) {
  $database = new DbConn("SELECT link, page FROM pages WHERE link!='logout' AND navlink = 'on'");
} elseif (isset($_SESSION['login'])) {
  $database = new DbConn("SELECT link, page FROM pages WHERE link!='login' AND navlink = 'on'");
  }
$db = $database->ConnectionDb();
if ($db->num_rows > 0) {
  // output data of each row
  while($row = $db->fetch_assoc()) {
echo "<li><a href='?page={$row['link']}' title='{$row['page']}'>{$row['page']}</a></li>";
  }
  $db = $database->CloseDb();
} else {
  echo "Нет разделов";
}
?>
                            </ul>
                            
                          <p>© Copyright <?= date('Y')." <a href='".HOME."'>".SITENAME."</a>" ?>. Все права защищены</p>
                          
                          
                          <!-- UiPasta Credit Start -->
                          <div class="uipasta-credit">Design By <a href="#">UiPasta</a></div>
                          <!-- UiPasta Credit End -->

                           
                         </footer>
                       </div>
                       <!-- Footer End -->