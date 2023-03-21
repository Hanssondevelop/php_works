<?php

class Person {
    protected $firstName;
    protected $lastName;

    public function getFirstName() {
        return "The first name is: $this->firstName";
    }
    public function getLastName() {
        return "The last name is: $this->lastName";
    }

    public function setFirstName($newFName) {
        $this->firstName = $newFName;
    }
    public function setLastName($newLName) {
        $this->lastName = $newLName;
    }

    public function fullName() {
        $fullName = "$this->firstName $this->lastName";
        return "His full name is: $fullName";
    }
}

//---------------------------------------------------------

$person = new Person();
$person->setFirstName("Alex");
$person->setLastName("Johnson");

echo $person->getFirstName()."<br>";
echo $person->getLastName()."<br>";
echo $person->fullName();
