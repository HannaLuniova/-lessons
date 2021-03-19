<?php

//$str = "Всем <b>Привет</b>!!!";
//$pat = "/<b>.*<\/b>/i";
//$rep = "<i>$0</i>";
//
//$str2 = preg_replace($pat, $rep, $str);
//
//echo $str2;

$str = "<b>Hi</b>!<b>всем</b>!<b>hi</b>";
$pat = "/<b>(.*)<\/b>/i";
$rep = "<i>$1</i>";

$str2 = preg_replace($pat, $rep, $str);

echo $str2;
