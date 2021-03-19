<?php
$numbe1 = $_POST['number1'];
$numbe2 = $_POST['number2'];

if ($numbe1 >= $numbe2) {
    echo '1';
} else {
    echo '2';
}
