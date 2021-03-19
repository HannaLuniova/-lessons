<?php

/*1*/
$a = "hello";
$b = str_shuffle($a);

echo $b;

echo "<br>";
/*2*/

$c = file_get_contents("file.txt");
echo str_shuffle($c);

echo "<br>";
/*3*/

file_put_contents("file.txt", str_shuffle(file_get_contents('file.txt')));
