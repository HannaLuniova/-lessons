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

                include_once "connect.php"; // подключаем файл connect для соединения с базой данных

                //создаем переменную, в которой формируем запрос для выбора полей из таблицы базы данных
                $sql = "SELECT* FROM {$config['mysql']['table']} WHERE id=$_GET[id]"; // имя таблицы передается из файла config
                $result = mysqli_query($link, $sql); //создаем переменную, в которой выполняем запрос
                $row = mysqli_fetch_assoc($result); // создаем переменную, в которой возвращаем ряд результата запроса в качестве ассоциативного массива

                ?>

                <form action="edit.php" method="post">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">

                    <?php
                    $fields = fieldslist($link, $config["mysql"]["table"]); // вызываем функцию, чтобы получить список полей

                    //создаем цикл, который проходит по списку и для каждого элемента генерируем поле ввода
                    foreach ($fields as $field) {
                    ?>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Имя</span>
                            <input type="text" name="<?= $field ?>" class="form-control" value="<?= $row[$field] ?>">
                        </div>
                    <?php
                    }
                    ?>
                    <input class="btn btn-warning" type="submit" value="Сохранить">
                </form>

            </div>
            <div class="col"></div>
        </div>
    </div>
</body>

</html>