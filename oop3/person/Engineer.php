<?php

class Engineer extends Person
{
    public function say(): string
    {
        return "Я инженер-программист, меня зовут $this->name";
    }

    public function doJob(): string
    {
        return "Я умею писать программы";
    }
}