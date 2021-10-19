<?php

class Person
{

    private $name;
    private $gender;
    private $age;

    public function __construct($name, $gender, $age)
    {

        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
        // // $this->setName($name);
        // $this->setGender($gender);
        // $this->setAge($age);
    }

    //setters & getters
    public function setName($valueName)
    {
        $this->name = $valueName;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setGender($valueGender)
    {
        $this->gender = $valueGender;
    }
    public function getGender()
    {
        return $this->gender;
    }
    public function setAge($valueAge)
    {
        $this->age = $valueAge;
    }
    public function getAge()
    {
        return $this->age;
    }

    public function getPersonDetails()
    {
        return " Name = {$this->name} <br /> Gender = {$this->gender} <br /> Age = {$this->age} ";
    }

    public function getBirthday()
    {
        $niver = ($this->age) + 1;
        
        return " <br /> Congrats for your {$niver} 's birthday !! ";
    }
}
