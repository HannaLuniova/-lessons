<?php
include 'autoload.php';

//use Luniova\Calc;
//use Hanna\Calc;

$calc1 = new Luniova\Calc(2, 3);
echo $calc1->sum();
$calc2 = new Hanna\Calc(2, 3);
echo $calc2->sum();

