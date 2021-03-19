<?php


$str = file_get_contents("https://www.dw.com/ru/covid-19-facebook-uzhestochaet-borbu-s-dezinformaciej/a-56503936");

$pattern = "/\bкоронавирус\b/iu";

echo "Найдено совпадений: " . $count = preg_match_all($pattern, $str) ;
