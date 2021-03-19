<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="emoji.php" method="post">
    <textarea name="q" cols="30" rows="10">

    </textarea>
    <input type="submit" value="ok">
</form>
<?
$str = $_POST["q"];
echo preg_replace(
    [
        "/:-?\)/iu",
        "/:-?\(/iu",
        "/:P/iu",
        "/:-\*/iu"
    ],
    [
        '😀',
        "😞",
        "😛",
        "😬"
    ],
    $str);
?>
</body>
</html>
