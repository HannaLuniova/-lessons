<?php

$arr = array("somearray" => array(6 => 5, 13 => 9, "a" => 42));

echo $arr["somearray"][6];
echo $arr["somearray"][13];
echo $arr["somearray"]["a"];

$arr = [
    "somearray" => [
        6 => 5,
        13 => 9,
        "a" => 42
    ]
];
echo $arr["somearray"][6];


$arr1 = [5 => 43, 32, 56, "b" => 12];

$arr2 = [5 => 43, 6 => 32, 7 => 56, "b" => 12];

echo "<pre>";
print_r($arr1);
echo "</pre>";

echo "<pre>";
print_r($arr2);
echo "</pre>";
