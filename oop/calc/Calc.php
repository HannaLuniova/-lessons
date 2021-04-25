<?php

/** Класс калькулятор
 * Class Calc
 */
class Calc
{
    /**
     * @var float переменная для вычеслений калькулятора
     */
    public float $a;
    /**
     * @var float переменная для вычеслений калькулятора
     */
    public float $b;


    /**
     * Calc constructor. Конструктор инициализирует переменные a,b
     * @param $a
     * @param $b
     */
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    /** Функция для сложения чисел
     * @return float
     */
    public function sum(): float
    {
        return $this->a + $this->b;
    }

    /** Функция для разности чисел
     * @return float
     */
    public function diff(): float
    {
        return $this->a - $this->b;
    }

    /** Функция для деления чисел
     * @return float
     */
    public function div(): float
    {
        return $this->a / $this->b;
    }

    /** Функция для умножения чисел
     * @return float
     */
    public function mult(): float
    {
        return $this->a * $this->b;
    }

    /** Функция для вычисления числа в степени
     * @return float
     */
    public function pow(): float
    {
        return pow($this->a,$this->b);
    }
}
