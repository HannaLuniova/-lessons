<?php

/**
 *  функция возращает список полей таблицы, в саму функцию передаём подключение и имя таблицы
 * @param $dblink
 * @param $tableName
 * @return array
 */

function fieldslist($dblink, $tableName): array
{
    $sql = "SHOW COLUMNS FROM $tableName"; //SHOW COLUMNS FROM тображает информацию о столбцах в данной таблице
    $result = mysqli_query($dblink, $sql);
    $fields = []; //переменная, в которой будут храниться поля таблицы

    // создаем цикл, в котором в $fields будем добавлять значения из таблицы не включая поле  "id"
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row["Field"] != "id") {
            $fields[] = $row["Field"];
        }
    }

    return $fields;
}
