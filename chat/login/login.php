<?php

session_start();
$_SESSION["username"] = $_POST["name"];
header("Location:form.php");
