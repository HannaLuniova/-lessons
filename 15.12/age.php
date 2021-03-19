<?php

$age = $_POST['age'];


if ($age <= 45) {
    echo 'Молодой человек';
} else if ($age <= 60) {
    echo 'Зрелый возраст';
} else {
    echo 'Пожилой человек';
}
