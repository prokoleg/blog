<?php
// script by Prokofiev Oleg info@blanet.ru ©2022
//
// Права на данный скрипт пренадлежает его автору.
// Модификация и использование данного скрипта разрешается только с разрешения
// его автора Прокофьева Олега (info@blanet.ru)
// Незаконное использование и распространение скрипта ЗАПРЕЩЕНО
// Скрипт распространяется по лицензии MIT

//include_once ($_SERVER['DOCUMENT_ROOT'].'/system/config.php');

class Content
{
	public $page;
	public $title;
	public $description;
	public $content;
	private $id;

	function __construct($id)
	{
		$this->id = $id;
	}

	function getPage()
	{
		$database = new DbConn("SELECT page FROM content WHERE id=$this->id");
		$db = $database->ConnectionDb();
		if ($db->num_rows > 0) {
		  // output data of each row
		  while($row = $db->fetch_assoc()) {
		$this->page = $row['page'];
	}
		  $db = $database->CloseDb();
		} else {
		  $this->content = "Такой страницы не существует";
		}
		return $this->page;
	}

	function getTitle()
	{
		$database = new DbConn("SELECT title FROM content WHERE id=$this->id");
		$db = $database->ConnectionDb();
		if ($db->num_rows > 0) {
		  // output data of each row
		  while($row = $db->fetch_assoc()) {
			$this->title = $row['title'];
		}
		    $db = $database->CloseDb();
		} else {
		  $this->content = "Такой страницы не существует";
		}
		return $this->title;
	}

	function getDescription()
	{
		$database = new DbConn("SELECT description FROM content WHERE id=$this->id");
		$db = $database->ConnectionDb();
		if ($db->num_rows > 0) {
		  // output data of each row
		  while($row = $db->fetch_assoc()) {
			$this->description = $row['description'];
		}
		    $db = $database->CloseDb();
		} else {
		  $this->content = "Такой страницы не существует";
		}
		return $this->description;
	}

	function getContent()
	{
		$database = new DbConn("SELECT content FROM content WHERE id=$this->id");
		$db = $database->ConnectionDb();
		if ($db->num_rows > 0) {
		  // output data of each row
		  while($row = $db->fetch_assoc()) {
			$this->content = $row['content'];
		}
		    $db = $database->CloseDb();
		} else {
		  $this->content = "Такой страницы не существует";
		}
		return $this->content;
	}
}

class WriteContent
{
	public $pagename;
	public $title;
	public $description;
	public $content;

	function __construct($pagename, $title, $description, $content)
	{
		$this->pagename = $pagename;
		$this->title = $title;
		$this->description = $description;
		$this->content = $content;
	}

	function putPage()
	{
		$this->pagename = $_POST['pagename'];
		$this->title = $_POST['title'];
		$this->description = $_POST['description'];
		$this->content = $_POST['content'];
		$database = new DbConn("ALTER TABLE content AUTO_INCREMENT=0");
		$db = $database->ConnectionDb();
		  if ($db === TRUE) {
		    
		  $database = new DbConn("INSERT INTO content (page, title, description, content) VALUES ('".$this->pagename."', '".$this->title."', '".$this->description."', '".$this->content."')");
		    $db = $database->ConnectionDb();
		    echo "Пост <strong>".$this->pagename."</strong> удачно размещен";
		  }
		  if ($db === FALSE) {
		    echo "Error<br>" . $db->error;
		  }
		$db = $database->CloseDb();
		return;
	}
}
