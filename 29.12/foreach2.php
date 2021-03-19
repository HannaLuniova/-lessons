<?php

$arr = [5, 8, 9, 10, 12, 15];

$a = 0;

for ($i = 0; $i <= count($arr); $i++) {
    $a = $a + $arr[$i];
}

echo $a . "<br>";

$b = 0;

foreach ($arr as $value) {
    $b = $b + $value;
}

echo $b . "<br>";
