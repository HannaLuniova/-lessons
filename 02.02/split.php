<?php
//$str = 'hypertext language programming';
//$chars = preg_split('/ /', $str);
//print_r($chars);

$str = 'Split string by a reguLar expression';
$a = preg_split('/b|g|l/i', $str);
print_r($a);