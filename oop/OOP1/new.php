<?php

//метод ==функция
//поле ==переменная

declare(strict_types=1); // строгая проверка типов данных во время выполнения($age,$name)

//чертёж по которому создаётся экземпляр класса(объект)
class Person
{
    private float $age; // private означает,что доступ к этому свойству возможен только из методов класса
    private string $name;

    // функция-construct, которая выполняется при создании экземпляра класса
    public function __construct($age, $name)
    {
        $this->age = $age;
        $this->name = $name;
    }

    public function intro()
    {
        return "Меня зовут $this->name, мне  $this->age лет.";
    }
}
// Создается экземпляр класса(объект) Person (ключевое слово new)
$man = new Person(45, "Alex");

// обращение к объекту и конкретному полю 
echo $man->age;
echo $man->name;
// echo $man->intro();
