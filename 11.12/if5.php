<?php

$many = 100;
$month = 6;
$percent = 1.5;
$s = $many;

for ($i = 1; $i <= $month; $i++) {
    $s = $s + ($s / 100 * $percent);
}

echo round($s, 2);

?>

<?php

    $money = 1000;
    $percent = 1.5;
    $month = 12;
    $sum = $money;
    for ($i = 1; $i <= $month; $i++) {
        $q = $sum * ($percent / 100) / 12;
        $q = $q * $month;
    }
    $sum = $sum + $q;

    echo round($sum, 4);
    ?>

