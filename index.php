<?php
// script by Prokofiev Oleg info@blanet.ru ©2022
//
// Права на данный скрипт пренадлежает его автору.
// Модификация и использование данного скрипта разрешается только с разрешения
// его автора Прокофьева Олега (info@blanet.ru)
// Незаконное использование и распространение скрипта ЗАПРЕЩЕНО
// Скрипт распространяется по лицензии MIT

session_name('blog');
session_start();


include_once ($_SERVER['DOCUMENT_ROOT'].'/system/config.php');

$database = new DbConn("SELECT firstname, lastname, email, work FROM users WHERE id=1");
$db = $database->ConnectionDb();
if ($db->num_rows > 0) {
  // output data of each row
  while($row = $db->fetch_assoc()) {

$autor = "<a href='mailto:".$row['email']."'>".$row['firstname'] ." ". $row['lastname']."</a>";
$work = $row['work'];
  }
  $db = $database->CloseDb();
} else {
  $autor = "Guest";
}
////////////

include 'templates/default/index.php';