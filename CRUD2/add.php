<?php

include_once "connect.php"; //устанавливаем соединение с базой данных

/** 
 * @var array $config конфигурационные данные из файла config
 * @var mysqli $link соединение с базой данных
 */

if (!empty($_POST)) {
    $fields = fieldslist($link, $config["mysql"]["table"]); // список полей

    //создаем переменную, в которой формируем запрос для вставки записи значений полей в базу данных
    $sql = "INSERT INTO {$config['mysql']['table']} " . implode(",", $fields) . " VALUES (" . "'" . implode("', '", $_POST) . "'" . ")";

    // выполняет запрос к базе данных MySQL ; $link являет собой идентификатор соединения, полученный с помощью connect.php
    mysqli_query($link, $sql);
}
// Перенаправление  на show.php
header("location:show.php");
