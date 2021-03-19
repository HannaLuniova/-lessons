<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="login.php" method="post">
        Представьтесь
        <input type="text" name="name">
        <input type="submit" value="OK">
    </form>
    <a href="page.php">Перейти на страницу - 2</a>
    <?= $_SESSION["username"]??"ERROR" ?>
    <a href="logout.php">Разлогиниться</a>

</body>

</html>