<?php
//
//function my_fun($x)
//{
//    return $x * $x;
//}
//
//$a = "my_fun";
//
//echo $a(2);
//echo "<br>";
//echo $a(3);
//
//echo "<br>";

function my_fun(callable $name): void
{
    $name();
}

my_fun(function (): void
{
    echo "Hello";
});