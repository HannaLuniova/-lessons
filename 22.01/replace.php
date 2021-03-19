<?php

$a = " hello world";

echo str_replace(" ", "", $a);
?>

<?php

$str = "Привет   я     рад              быть                 учеником     компьютерной      школы. \n";
$counter = 0;
do {
    echo $str = str_replace('  ', ' ', $str, $counter);
} while ($counter > 0);
echo $str;