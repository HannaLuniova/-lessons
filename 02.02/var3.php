<?php

//$str = " not to be";

//$str="Perform a regular expression match";

$str = " be";

$pat = "/^(be)|(not\sto\sbe)$/i";
if (preg_match($pat, $str)) {
    echo "Вхождение найдено";
} else {
    echo "Вхождение не найдено";
}