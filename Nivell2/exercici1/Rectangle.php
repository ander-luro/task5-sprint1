<?php
declare(strict_types=1);
require_once'Shape.php';

class Rectangle extends Shape {
    public float $width;
    public float $height;

    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() : float{
        return $this->height * $this->width;
    }
 }
