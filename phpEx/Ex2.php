<?php
class Worker {
    private $name, $age, $salary;

    public function setName($setname) {
        $name = $setname;
    }
    public function getName() {
        return $this->name;
    }
    public function setAge($setage) {
        $age = $setage;
    }
    public function getAge() {
        return $this->age;
    }
    public function setSalary($setsalary) {
        $salary = $setsalary;
    }
    public function getSalary() {
        return $this->salary;
    }
}

$oneObj = new Worker();
$twoObj = new Worker();