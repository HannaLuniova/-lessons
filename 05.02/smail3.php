<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="smail3.php" method="post">
    <textarea name="q" cols="30" rows="10">

    </textarea>
    <input type="submit" value="ok">
</form>
<?php

$str = $_POST["q"];
echo preg_replace(
    [
        "/:-?\)/iu",
        "/:-?\(/iu",
        "/:\*\(/iu"
    ],
    [
        "<img src='img/1.png'>",
        "<img src='img/2.png.'>",
        "<img src='img/3.png.'>"
    ],
    $str);
?>
</body>
</html>
