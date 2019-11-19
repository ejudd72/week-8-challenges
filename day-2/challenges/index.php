<?php

require_once __DIR__ . '/vendor/autoload.php';

echo "\nQuestion 1:\n";

use App\Hello;

$sayHi = new Hello();

dump($sayHi->hello("Orb")); // "Hello Orb"
dump($sayHi->hello("Horse")); // "Hello Horse"

echo "\nQuestion 2\n";

use App\Person;

$person1 = new Person("Lynne",  "Ramsay");
$person2 = new Person("Wes", "Anderson");

dump($person1->sayHelloTo($person2)); // string(9) "Hello Wes Anderson"
dump($person2->sayHelloTo($person1)); // string(11) "Hello Lynne Ramsay"