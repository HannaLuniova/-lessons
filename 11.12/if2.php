
<?php

$a = 30;

$x = $a * 2.6;

echo $x;

?>


<?php
echo "<br\n>";

$a = 10;

if ($a < 100) {
    $x = $a * 2.53;
} elseif ($a >= 100 and $a < 10000) {
    $x = $a * 2.50;
} else {
    $x = $a * 2.49;
}
echo $x;
?>

<?php
echo "<br\n>";

$a = 7;
$b = 8;
$x = 3;

$y = floor($a / $x) * floor($b / $x);

echo $y;
?>