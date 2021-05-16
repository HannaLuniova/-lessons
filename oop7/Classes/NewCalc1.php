<?php


class NewCalc1 extends NewCalc
{
    public function sinA(): float
    {
        return sin(deg2rad($this->a));
    }

    public function sinB(): float
    {
        return sin(deg2rad($this->b));
    }

    public function cosA(): float
    {
        return cos(deg2rad($this->b));
    }

    public function cosB(): float
    {
        return cos(deg2rad($this->b));
    }
}