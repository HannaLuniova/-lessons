<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="smail2.php" method="post">
    <textarea name="q" cols="30" rows="10">

    </textarea>
    <input type="submit" value="ok">
</form>
<?php
$str = $_POST["q"];

$str = preg_replace("/:\)/iu", "<img src='img/1.png'>", $str);
echo preg_replace("/:\(/iu", "<img src='img/2.png'>", $str);

$pattern = [
    "/:\)/iu",
    "/:\(/iu"
];
$replacement = [
    "<img src='img/1.png'>",
    "<img src='img/2.png'>"
];
echo preg_replace($pattern, $replacement, $str);

echo preg_replace(
    [
        "/:\)/iu",
        "/:\(/iu"
    ],
    [
        "<img src='img/1.png'>",
        "<img src='img/2.png'>"
    ],
    $str);
?>

</body>
</html>

