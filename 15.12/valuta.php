<?php

$byn = $_POST['byn'];
$dol = $byn / 2.53;
$euro = $byn / 3.07;
$rus = $byn / 0.0343;

echo ' USD ' .round($rus, 2). '<br>';
echo ' EUR ' .round($dol, 2). '<br>';
echo ' RUB ' .round($euro, 2). '<br>';
