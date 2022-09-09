<?php
// script by Prokofiev Oleg info@blanet.ru ©2022
//
// Права на данный скрипт пренадлежает его автору.
// Модификация и использование данного скрипта разрешается только с разрешения
// его автора Прокофьева Олега (info@blanet.ru)
// Незаконное использование и распространение скрипта ЗАПРЕЩЕНО
// Скрипт распространяется по лицензии MIT

define('HOME', $_SERVER['DOCUMENT_ROOT']);
define('CLASSES', HOME.'/system/classes');

define('HOST', 'localhost');
define('DBUSER', 'db_user');
define('DBPASS', 'db_pass');
define('DBNAME', 'blog');

define('SITENAME', 'Мой блог');
define('HOMEURL', 'http://blog.site');
define('TEMPLATE', HOME.'/templates/default/');
define('ADMIN', TEMPLATE.'admin/');

// Подключение классов
foreach (glob(CLASSES.'/*.php') as $filename)
{
    require_once $filename;
}