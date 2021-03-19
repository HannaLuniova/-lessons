<?php

// echo 'чтобы вывести \' надо перед ней поставить\\';

// echo '<br>';

// echo 'Это не вставит:\n новую строку';

?>

<?php
// echo '<br>';

// $a = 3;

// echo "\$a=$a";

?>

<?php
// echo '<br>';

// echo "\tНовая \"строка\" \n перевод";

?>

<?php
echo '<br>';

$name = 'Петя';
$a = <<<TEXT
Привет
Пока $name
TEXT;

echo $a;
