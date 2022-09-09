<?php
// script by Prokofiev Oleg info@blanet.ru ©2022
//
// Права на данный скрипт пренадлежает его автору.
// Модификация и использование данного скрипта разрешается только с разрешения
// его автора Прокофьева Олега (info@blanet.ru)
// Незаконное использование и распространение скрипта ЗАПРЕЩЕНО
// Скрипт распространяется по лицензии MIT

class UrlPage
{
	public static $page;

	public static function Url() {
		if (!$_GET) { include TEMPLATE."/home.php"; }
		if ($_GET) {
			self::$page = $_GET['page'];
			include TEMPLATE."/".self::$page.".php";
		}
		return;
	}
}