<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <?php
                /** 
                 * @var array $config конфигурационные данные из файла config
                 * @var mysqli $link соединение с базой данных
                 */

                include_once "connect.php"; // подключаем файл connect для соединения с базой данных

                $fields = fieldslist($link, $config["mysql"]["table"]); // список полей

                $sql = "SELECT * FROM {$config['mysql']['table']}"; // имя таблицы берётся из файла config.php

                $result = mysqli_query($link, $sql); //запрос к базе данных

                echo "<table class='table table-striped'>";

                $headers = ""; // формируем строку с заголовками таблицы

                //создаем цикл, который выводит заголовки таблицы
                foreach ($fields as  $field) {
                    $headers .= "<th>$field</th>";
                }

                // $headers="<th>".implode("</th><th>",$fields)."</th>"; альтернатива foreach

                echo "$headers<th>Удалить</th><th>Редактировать</th>"; //добавляем заголовки "удалить" и "редактировать"

                //создаем цикл, который выводит содержимое таблицы в автоматическом режиме
                while ($row = mysqli_fetch_assoc($result)) {

                    $tableRow = ""; //формируем строку с данными из таблицы
                    
                    foreach ($fields as  $field) {
                        $tableRow .= "<td>$row[$field]</td>";
                    }
                    echo
                    "<tr>$tableRow" .
                        // добавляем кнопки редактировать и удалить в строку таблицы
                        "<td><a href='delete.php?id=$row[id]'>❌</a></td>" .
                        "<td><a href='editShow.php?id=$row[id]'>✏️</a></td>" .
                        "</tr>";
                }

                echo "</table>";
                ?>
                <a class="btn btn-primary" href="showAdd.php">Добавить</a>
            </div>
            <div class="col"></div>
        </div>
    </div>

</body>

</html>