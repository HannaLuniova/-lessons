
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="mail.php" method="post">
    <textarea name="q" cols="30" rows="10">
    </textarea>
    <input type="submit" value="ok">
</form>
<?php
 $str = $_POST["q"];
$regexp = "/^[0-9A-Z_]{5,}@[0-9A-Z]{2,}\.[A-Z]{2,6}$/iu"; //‘/[^\s]+@[^\s\.]+\.[a-z]+/’;
if (preg_match($regexp, $str)) {
    echo "yes";
} else {
    echo "no";
}
?>

</body>
</html>
