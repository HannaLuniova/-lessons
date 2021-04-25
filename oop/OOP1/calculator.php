<?php
//Написать класс Калькулятор для выполнения действий над двумя числами

class Calc
{
    public float $a;
    public float $b;


    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function Sum(): float
    {
        return $this->a + $this->b;
    }

    public function Diff(): float
    {
        return $this->a - $this->b;
    }

    public function Div(): float
    {
        return $this->a / $this->b;
    }

    public function Mult(): float
    {
        return $this->a * $this->b;
    }
}

$calc = new Calc(1, 2);

echo $calc->sum() . "<br>";
echo $calc->diff() . "<br>";
echo $calc->div() . "<br>";
echo $calc->mult();
