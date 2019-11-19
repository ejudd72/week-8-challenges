<?php

namespace App;

class Person
{
    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function sayHelloTo()
    {
        return "Hello ".$this->firstName." ".$this->lastName;
    }
}