<?php
//include 'A.php';
//include 'Pre.php';
include 'TList.php';
include 'Ul.php';
include 'Ol.php';


//$a = new A();
//echo $a
//    ->setHref("https://www.tut.by")
//    ->setInnerText("Тут.бай")
//    ->html();
//
//echo $a
//    ->setInnerText("ok")
//    ->html();
//
//$pre = new Pre();
//echo $pre
//    ->setInnerText("Hi \n Привет")
//    ->html();

$ul = new Ul();
echo $ul
    ->setData(["Иванов", "Петров", "Сидоров"])
    ->setType("circle")
    ->html();

echo $ul
    ->setType("disc")
    ->html();

$ol = new Ol();
echo $ol
    ->setData(["Иванов", "Петров", "Сидоров"])
    ->setType("A")
    ->html();

echo $ol
    ->setType("i")
    ->html();
