<?php

$arr = array(
    "img12.png",
    "img10.png",
    "img2.png",
    "img1.png",
);
sort($arr);
print_r($arr);

natsort($arr);
print_r($arr);

/*------------*/

$arr = array(
    "img12.png",
    "img10.png",
    "IMG2.png",
    "img1.png",
);

natsort($arr);/*Сортирует массив, используя алгоритм "natural order", с учётом регистра */
print_r($arr);

natcasesort($arr);/*Сортирует массив, используя алгоритм "natural order" без учёта регистра символов */
print_r($arr);
