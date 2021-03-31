<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row ">
            <div class="col"></div>
            <div class="col">
                <?php
                $link = mysqli_connect("localhost", "root", "root", "GuestBook");

                $sql = "SELECT * FROM `gb`";
                $result = mysqli_query($link, $sql);

                echo "<table class='table table-success table-striped add'>";
                echo "<th>Вопрос №1</th>
                     <th>Вопрос №2</th>
                     <th>Вопрос №3</th>
                     <th>Вопрос №4</th>";

                while ($row = mysqli_fetch_assoc($result)) {
                    echo
                    "<tr>
                     <td> $row[message]</td>
                     <td> $row[name]</td>
                     </tr>";
                }

                echo "</table>";

                mysqli_free_result($result);
                mysqli_close($link);
                ?>

                <br>
                <form action="add.php" method="post">
                    <textarea class="form-control" cols="30" rows="2" name="message"></textarea><br>
                    <input class="form-control" type="text" name="name"><br>
                    <button type="submit" class="btn btn-outline-success">Отправить</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>

</html>