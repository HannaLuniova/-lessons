<?php

$time_start = microtime(1);

for ($i = 0; $i < 1000; $i++) {
}

$time_end = microtime(1);
$time = $time_end - $time_start;

echo  $time; //1.3113021850586E-5
