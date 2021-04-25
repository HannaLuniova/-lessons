<?php

include_once "connect.php"; // подключаем файл connect для соединения с базой данных

//пустой массив
$str = [];
// перебираем массив $_POST, из которого в массив $str будем записывать пары ключ=>значения не включая поле  "id"
foreach ($_POST as $field => $value) {
    if ($field != "id") {
        $str[] = "$field = '$value'";
    }
}
//создаем переменную, в которой формируем запрос для редактирования записей в базе данных
// с помощью implode собираем новые значения полей в одну строку через запятую
$sql = "UPDATE {$config['mysql']['table']} SET " . implode(",", $str) . " WHERE id='$_POST[id]'"; 

// выполняет запрос к базе данных MySQL ; $link являет собой идентификатор соединения, полученный с помощью connect.php
mysqli_query($link, $sql);

 // Перенаправление  на show.php
header("location:show.php");
