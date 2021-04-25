<?php

abstract class Auto
{
    /**
     * Кол-во топлива в литрах
     * @var float
     */
    protected float $bac;

    public function __construct()
    {
        $this->bac = 0;
    }

    /**
     * Устанавливает объём топлива в литрах
     * @param float $bac
     */
    public function setBacL(float $bac): void
    {
        $this->bac = $bac;
    }

    /**
     * Устанавливает объём топлива в галлонах
     * @param float $bac
     */
    public function setBacG(float $bac): void
    {
        $this->bac = $bac * 4.54609;
    }

    public function rashodTopliva($rashod)
    {
        if (($this->bac - $rashod) < 0) {
            $this->bac = 0;
        } else {
            $this->bac -= $rashod;
        }
    }

    abstract public function drive();

}