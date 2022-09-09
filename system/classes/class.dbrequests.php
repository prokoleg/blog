<?php
// script by Prokofiev Oleg info@blanet.ru ©2022
//
// Права на данный скрипт пренадлежает его автору.
// Модификация и использование данного скрипта разрешается только с разрешения
// его автора Прокофьева Олега (info@blanet.ru)
// Незаконное использование и распространение скрипта ЗАПРЕЩЕНО
// Скрипт распространяется по лицензии MIT

class DbConn
{
    public $conn;
    public $sql;

    function __construct($sql) {
        $this->sql = $sql;
    }

    // получаем соединение с БД
    public function ConnectionDb(){        
        $this->conn = new mysqli(HOST, DBUSER, DBPASS, DBNAME);
    	return $this->conn->query($this->sql);
    }

    // закрываем соединение с БД
    public function CloseDb(){
        return $this->conn->close();
    }
}