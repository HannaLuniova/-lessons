<?php

class Cal
{
    public float $x;
    public float $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function sum(): float
    {
        return $this->x + $this->y;
    }

    public function diff(): float
    {
        return $this->x - $this->y;
    }
}

class  Calc extends Cal
{
    public function div(): float
    {
        return $this->x / $this->y;
    }

    public function mult(): float
    {
        return $this->x * $this->y;
    }
}

$cal = new Cal(1, 2);
$calc = new Calc(3, 4);

echo $calc->sum(). "<br>";
echo $cal->diff();