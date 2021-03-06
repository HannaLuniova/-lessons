<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
include "autoload.php";

$tictac = new Tictac(3);
$tictac
    ->putCross(1, 1)
    ->putZero(2, 1)
    ->putCross(0, 2)
    ->putZero(2, 2)
    ->putCross(1, 2)
    ->putZero(2, 0);

$tictac->checkWinnerByColl();

$map = new Map();
echo $map->setMap($tictac->getMap())->getHtmlTable();


?>
</body>
</html>
