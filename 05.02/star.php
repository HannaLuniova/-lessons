<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="star.php" method="post">
    <textarea name="q" cols="30" rows="10">

    </textarea>
    <input type="submit" value="ok">
</form>

<?php
$str = $_POST["q"];
$regexp = "/\*(.*?)\*/iu";
echo preg_replace($regexp, "<i>$1</i>", $str);
?>
</body>
</html>
