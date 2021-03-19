<?php

$date = explode("-", $_POST["q"]);
$year = $date[0];
$month = $date[1];
$day = $date[2];
$days = time() - mktime(0, 0, 0, $month, $day, $year);
