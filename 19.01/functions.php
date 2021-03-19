<?php

$a = file_get_contents("https://www.php.net/manual/ru/indexes.functions.php");

echo substr_count($a, '<a href="function');
