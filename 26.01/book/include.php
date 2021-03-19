<?php

if (!empty($_POST)) {
    $row = "\n<----->\n" .
        $_POST["name"] .
        "\n" .
        $_POST["surname"] .
        "\n" .
        $_POST["email"];
    file_put_contents("file.txt", $row, FILE_APPEND);
    header("Location: ?");
    die();
}

