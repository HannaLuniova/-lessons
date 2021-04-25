<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>

<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">

            <form action="add.php" method="post">
                <?php

                include_once "connect.php"; // подключаем файл connect для соединения с базой данных
                /** 
                 * @var array $config конфигурационные данные из файла config
                 * @var mysqli $link соединение с базой данных
                 */
                $fields = fieldslist($link, $config["mysql"]["table"]); // вызываем функцию, чтобы получить список полей таблицы

                //создаем цикл, который проходит по списку и для каждого элемента генерируем поле ввода
                foreach ($fields as $field) {
                ?>
                    <div class="input-group mb-3">
                        <input type="text" name="<?= $field ?>" class="form-control" placeholder="<?= $field ?>">
                    </div>

                <?php
                }
                ?>
                <input class="btn btn-primary" type="submit" value="Добавить">
            </form>

        </div>
        <div class="col">
        </div>
    </div>

</div>
</body>

</html>