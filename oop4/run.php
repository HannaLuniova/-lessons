<?php

spl_autoload_register(function ($class) {
    include "Classes/$class.php";
});

$calc = new Calc(2, 3);
echo $calc->sum()."<br>";

$cal2 = new Division(12, 3);
echo $cal2->div();