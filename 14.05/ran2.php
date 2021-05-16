<?php
include 'autoload.php';

use Luniova\Calc as CalcL;
use Hanna\Calc as CalcH;

$calc1 = new CalcL(2, 3);
echo $calc1->sum();

$calc2 = new CalcH(2, 3);
echo $calc2->sum();