<?php

$points = $_POST['points'];

if ($points >= 60) {
    echo 'Поступил';
} else {
    echo 'Не поступил';
}
