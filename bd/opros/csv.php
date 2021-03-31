<?php

header('Content-Disposition: attachment; filename="file.csv"');

$link = mysqli_connect("localhost", "root", "root", "GuestBook");

$sql = "SELECT * FROM `opros`";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "$row[id];$row[name];$row[review];$row[comment];$row[phone]\n";
}
