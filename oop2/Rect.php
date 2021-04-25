<?php

class Rect
{
    protected float $a;
    protected float $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function setA($a)
    {
        if ($a > 0) {
            $this->a = $a;
        }
    }

    public function setB($b)
    {
        if ($b > 0) {
            $this->b = $b;
        }
    }

    public function square(): float
    {
        return $this->a * $this->b;
    }
}

class Perimeter extends Rect
{
    public function per(): float
    {
        return 2 * ($this->a + $this->b);
    }
}

$rect2 = new Perimeter(2, 3);
echo $rect2->per() . "<br>";

$rect2->setA(2);
$rect2->setB(3);
echo $rect2->per();
