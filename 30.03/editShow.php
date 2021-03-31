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

                $sql = "SELECT* FROM `vedomost` WHERE id=$_GET[id]";
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($result);

                ?>

                <form action="edit.php" method="post">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Имя</span>
                        <input type="text" name="name" class="form-control" value="<?= $row['name'] ?>">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Зарплата</span>
                        <input type="text" name="zp" class="form-control" value="<?= $row['zp'] ?>">
                    </div>
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <input class="btn btn-warning" type="submit" value="Сохранить">
                </form>

            </div>
            <div class="col"></div>
        </div>
    </div>
</body>

</html>