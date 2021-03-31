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
                <form action="opros_add.php" method="post">

                    <label for="">Как вас зовут</label><br>
                    <input class="btn btn-outline-secondary" type="text" name="name"><br>

                    <label for="">Как вам мероприятие</label><br>
                    <textarea class="btn btn-outline-secondary" name="review" cols="30" rows="2"></textarea><br>

                    <label for="">Как вы про нас узнали</label><br>
                    <textarea class="btn btn-outline-secondary" name="comment" cols="30" rows="2"></textarea><br>

                    <label for=""> Контактный телефн:</label><br>
                    <input class="btn btn-outline-secondary" type="tel" name="phone"><br><br>

                    <input class="btn btn-outline-secondary" type="submit" value="Отправить">
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>

</html>