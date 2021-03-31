<?php

$link = mysqli_connect("localhost", "root", "root", "GuestBook");

if (!empty($_POST)) {
    $sql = "INSERT INTO `opros`(`name`,`review`,`comment`,`phone`) VALUES ('$_POST[name]','$_POST[review]','$_POST[comment]','$_POST[phone]')";
    mysqli_query($link, $sql);
}
header("location:qwerty.php");