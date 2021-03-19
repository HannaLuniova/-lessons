<?php

$arr = array(5 => 1, 12 => 2);

echo "<pre>";
print_r($arr);
echo "</pre>";

// в этом месте скрипта это эквивалентно $arr[13] = 56;
$arr[] = 56;

echo "<pre>";
print_r($arr);
echo "</pre>";

// Это добавляет к массиву новый элемент с ключом -х-
$arr["x"] = 42;

echo "<pre>";
print_r($arr);
echo "</pre>";

// это удаляет элемент из массива
unset($arr[5]);

echo "<pre>";
print_r($arr);
echo "</pre>";

// это удаляет  массив полностью
unset($arr);

echo "<pre>";
print_r($arr);
echo "</pre>";
