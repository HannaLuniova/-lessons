<?php
$x = 2;

if ($x > 2) {
    $y = sqrt($x);
} else {
    $y = $x ** 2;
}
echo $y;
?>

<?php
echo "<br\n>";

$x = 3;

if ($x > 5) {
    $y = sqrt($x);
} else {
    if ($x <= 3) {
        $y = $x ** 2;
    } else {
        $y = $x + 5;
    }
}
echo $y;
?>