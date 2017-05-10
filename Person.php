<?php

class Person {
    public $name;

    public $age;

    /**
     * Person constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Using Getters and Setters gives us some security and allow us to define Scope/Rule/Behavior for the properties.
     */

    /**
     * Set Age of a Person.
     * Person cannot be below 18yrs of age.
     * @param $age
     * @throws Exception for under age.
     */
    public function setAge($age)
    {
        if ($age < 18) {
            throw new Exception("Person is not old enough.");
        }
        $this->age = $age;
    }

    /**
     * @return mixed Age of the Person.
     */
    public function getAge()
    {
        return $this->age;
    }
}

$john = new Person('John Doe');
$john->setAge(19);
// it is still possible to assign value directly into the property. This is when we need ENCAPSULATION
//$john->age = 12;
var_dump($john);