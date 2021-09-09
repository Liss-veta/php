<?php
class Worker {
    public $name, $age, $salary;
}

#Первый экземпляр

$workerOne = new Worker();
$workerOne->name = "Иван";
$workerOne->age = 25;
$workerOne->salary = 1000;

#Второй экземпляр

$workerTwo = new Worker();
$workerTwo->name = "Вася";
$workerTwo->age = 26;
$workerTwo->salary = 2000;

#Вывод информации на экран

$workerOneAge = $workerOne->age;
$workerTwoAge = $workerTwo->age;
$workerOneSalary = $workerOne->salary;
$workerTwoSalary = $workerTwo->salary;

echo "Суммарный возраст двух работников: " . ($workerOneAge + $workerTwoAge) . "<br>";
echo "Суммарная з/п двух работников: " . ($workerOneSalary + $workerTwoSalary);