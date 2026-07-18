<?php
require_once 'Animal.php';
require_once 'Dog.php';
require_once 'Cat.php';
require_once 'Cow.php';


$d1 = new Dog("Tobby");
echo "My name is " . $d1->getName() . PHP_EOL;
$d1->speak();

$d2 = new Dog("Max");
echo "My name is " . $d2->getName() . PHP_EOL;
$d2->speak();

$cat1 = new Cat("Salem");
echo "My name is " . $cat1->getName() . PHP_EOL;
$cat1->speak();

$cow1 = new Cow("Reina");
echo "My name is " . $cow1->getName() . PHP_EOL;
$cow1->speak();


