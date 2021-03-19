<?php

$a = file_get_contents("file.txt");

echo preg_replace("/\d/", "<img src='img/$0.gif'>", $a);

file_put_contents("file.txt", ($a + 1));
