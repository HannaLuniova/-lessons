<?php
//Написать класс Точка содержащий координаты точки

class Point
{
    public  $x, $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}


$point = new Point(2, 5);


echo $point->x;

echo $point->y;
