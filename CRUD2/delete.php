<?php 

include_once "connect.php";//устанавливаем соединение с базой данных

$sql = "DELETE FROM {$config['mysql']['table']} WHERE id = $_GET[id]";

mysqli_query($link, $sql);// выполняет запрос к базе данных MySQL ; $link= хранятся данные подключения к БД;

header("location:show.php");
