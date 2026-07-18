<?php
require 'Animal.php';

$d1 = new Dog("Tobby");
echo $d1->getName() . PHP_EOL;
$d1->Speak();

$d2 = new Dog("Max");
echo $d1->getName() . PHP_EOL;
$d2->Speak();

$c1 = new Cat("Salem");
echo $c1->getName() . PHP_EOL;
$c1->Speak();

