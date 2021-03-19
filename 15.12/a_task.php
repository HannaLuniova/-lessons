<?php


$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];


// if ($a > $b) {
//     $buf = $a;
// } else {
//     $buf = $b;
// }

// if ($buf > $c) {
//     $max = $buf;
// } else {
//     $max = $c;
// }
// echo $max;
echo max($a, $b, $c);
