<?php

class Lada extends Auto
{
    public function drive(): string
    {
        if ($this->bac > 0) {
            $this->rashodTopliva(8);
            return "Я езжу";
        }
        return "Закончилось топливо";
    }
}
