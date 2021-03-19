<?php

function test()
{
    static $a = 0;
    echo $a;
    $a++;
}

echo Test(); //0
echo Test(); //1
echo Test(); //2
