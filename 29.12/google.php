<?php

$x = $_POST["q1"];

// $word = [
//     "ноль" => "zero",
//     "один" => "one",
//     "два" => "two",
//     "три" => "three",
// ];


// if (isset($word[$x])) {
//     echo $word[$x];
// } else {
//     echo "error";
// }


switch ($x) {
    case "ноль":
        $str = "zero";
        break;

    case "один":
        $str = "one";
        break;

    case "два":
        $str = "two";
        break;

    case "три":
        $str = "three";
        break;

    case "четыре":
        $str = "four";
        break;

    case "пять":
        $str = "five";
        break;

    default:
    $str="нет такого числа";
        break;
}

echo $str;
