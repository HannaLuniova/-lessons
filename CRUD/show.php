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
                include_once "connect.php";

                $sql = "SELECT * FROM `vedomost`";

                $result = mysqli_query($link, $sql);

                echo "<table class='table table-striped'>";
                echo
                "<th>Имя</th>
                <th>Зарплата</th>
                 <th>Удалить</th>
                 <th>Редактировать</th>";

                while ($row = mysqli_fetch_assoc($result)) {
                    echo
                    "<tr>
                     <td> $row[name]</td>
                     <td> $row[zp]</td>
                     <td><a href='delete.php?id=$row[id]'>❌</a></td>
                     <td><a href='editShow.php?id=$row[id]'>✏️</a> </td>
                     </tr>";
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