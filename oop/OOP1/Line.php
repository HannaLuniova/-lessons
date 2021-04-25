<?php
//Написать класс Линия, содержащий координаты точек начала и конца линии
//для того что бы нарисовать линию на плоскости нужно знать координаты двух точек(x1, y1,x2, y2)

class Line
{
    public float $x1;
    public float $y1;
    public float $x2;
    public float $y2;

    public function __construct($x1, $y1, $x2, $y2)
    {
        $this->x1 = $x1;
        $this->x2 = $x2;
        $this->y1 = $y1;
        $this->y2 = $y2;
    }
}

$line = new Line(1, 3.2, 4, 2);

echo $line->x1;
echo $line->y1;
echo $line->x2;
echo $line->y2;
