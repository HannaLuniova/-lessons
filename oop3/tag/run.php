<?php
include 'Table.php';
include 'Textarea.php';
include 'Input.php';

$tb = new Table();
echo $tb
    ->setStyle(" border: 1px solid black;")
    ->setData([
        ['Петя', 'Вася', 'Ира'],
        ['Вася', 'Ира', 'Петя'],
        ['Ира', 'Лена', 'Вика'],
        ['Лена', 'Вася', 'Ира'],
        ['Вика', 'Ира', 'Лена'],
        ['Оля', 'Лена', 'Вика']
    ])
    ->html();

$textarea = new Textarea();
echo $textarea
        ->setCols(50)
        ->setRows(6)
        ->setStyle('border:1px solid green')
        ->setInnerText("элемент формы для создания области, в которую можно вводить несколько строк текста")
        ->html() . "<br>";


$a = new Input();
$a->setValue("Введите ваше имя: ");
echo $a->html();