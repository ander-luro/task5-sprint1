<?php
declare(strict_types=1);
require_once'Rectangle.php';
require_once'Triangle.php';

$t1 = new Triangle(12.4, 9);
echo "Triangle's area is {$t1->calculateArea()}" . PHP_EOL;

$r1 = new Rectangle(10, 4.2);
echo "Rectangle's area is {$r1->calculateArea()}" . PHP_EOL;

