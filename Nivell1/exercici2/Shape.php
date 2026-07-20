<?php
declare(strict_types=1);

abstract class Shape {
    protected float $height;
    protected float $width;

    public function __construct(float $height, float $width){
        $this->height = $height;
        $this->width = $width;
    }

    abstract public function calculateArea() : float;

}
