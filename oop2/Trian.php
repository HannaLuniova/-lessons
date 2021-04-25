<?php

class Trian
{
    protected float $a;
    protected float $b;

    public function __construct($a, $b)
    {
        $this->setA($a);
        $this->setB($b);
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

    public function hypo(): float
    {
        return sqrt(pow(($this->a), 2) + pow(($this->b), 2));
    }
}

class Square extends Trian
{
    public function trin(): float
    {
        return ($this->a * $this->b) / 2;
    }

    public function perimeter(): float
    {
        return $this->a + $this->b + $this->hypo();
    }
}

$c = new Trian(3, 7);

$c2 = new Square(10, 10);

echo "Периметр= {$c2->perimeter()}.<br>";

$c2->setA(20);
$c2->setB(10);
echo $c2->perimeter();

//echo $c2->trin();
//echo $c->hypo() . "<br>";
//
//$c->setA(3);
//$c->setB(7);
//echo $c->hypo();