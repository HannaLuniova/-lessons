<?php

// $headers = get_headers($_POST["url"], 0);

// print_r($headers);
// echo $headers["Content-Type"];

// header('Content-Type: ' . $headers['Content-Type']);

// echo file_get_contents($_POST["url"]);


$a = file_get_contents($_POST["url"]);

$b = "/^\<(div)+\s(class)[=\"\w\"]\>\<p\>\w+\s\<p\>$/iu";
$c = preg_match($b, $a);
echo $c;
