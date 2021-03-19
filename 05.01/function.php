<?php

function max2($a, $b)
{
    if ($a > $b) {
        $rez = $a;
    } else {
        $rez = $b;
    }
    return $rez;
}

// echo max2(5, 8);

$a = 4;
$b = 6;
$c = 3;

echo max2(max2($a, $b), $c);

