<?php

$link = mysqli_connect("localhost", "root", "root", "GuestBook");

if (!empty($_POST)) {
    $sql = "INSERT INTO `gb`( `message`, `name`) VALUES ('$_POST[message]','$_POST[name]')";
    mysqli_query($link, $sql);
}
header("location:bd.php");
