<?php

function max3($a, $b)
{
    if ($a > $b) {
        $rez = $a;
    } else {
        $rez = $b;
    }
    return $rez;
}


$a = 4;
$b = 6;
$c = 3;
$d = 2;
$i = 8;

echo max3(max3(max3(max3($a, $b), $c), $d), $i);
