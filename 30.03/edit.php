<?php 

include_once "connect.php";

$sql = "UPDATE `vedomost` SET `name`='$_POST[name]',`zp`='$_POST[zp]' WHERE id='$_POST[id]'";
mysqli_query($link, $sql);

header("location:show.php");
