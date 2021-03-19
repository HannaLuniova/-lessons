<?php
//$str = file_get_contents("https://www.onliner.by");
// echo preg_match_all('/Минск/iu',$str);

$str = file_get_contents("https://www.onliner.by/");

echo preg_match_all("/минск(.*?)\b/iu", $str, $match);

print_r($match);