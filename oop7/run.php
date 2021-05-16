<?php
include 'autoload.php';


$calc = new NewCalc1(60, 3);

echo $calc->sum();

echo "<br>";

echo $calc->mult();

echo "<br>";

echo $calc->div();

echo "<br>";

echo $calc->diff();

echo "<br>";

echo $calc->sinA();
echo "<br>";

echo $calc->sinB();
echo "<br>";

echo $calc->cosA();
echo "<br>";

echo $calc->cosB();