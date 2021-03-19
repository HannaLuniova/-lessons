<?php

$data = file("file.txt");

$answer = $_POST["answer"];

$data[$answer] = ($data[$answer] + 1) . "\n";
print_r($data);

$saveData = $data[0] . $data[1] . $data[2] . $data[3];

$fp = fopen("file.txt", "w+");
fwrite($fp, $saveData);
fclose($fp);
