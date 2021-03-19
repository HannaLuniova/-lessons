<?php

function min2($a, $b)
{

    return  $a < $b ? $a : $b;
}

$a = 2;
$b = 1;
$c = 3;


echo min2(min2($a, $b), $c);
