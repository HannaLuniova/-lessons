<?php

function cmp($a, $b)
{
    if (gettype($a) == gettype($b)) {
        return ($a < $b) ? -1 : 1;
    }
    return (is_string($a)) ? 1 : -1;
}

$arr = [4, "1", 2, "5", 3];
usort($arr, "cmp");
print_r($arr);