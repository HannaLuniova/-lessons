<?php

$a = function (string $name): void
{
    echo "Hello $name<br>";
};

$a("Pieter");
$b = $a;
$b("Alex");
