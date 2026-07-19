<?php
declare(strict_types=1);

abstract class Animal {
    private string $name;

    function __construct(string $name){
        $this->name = $name;
    }

    public function getName() : string {
        return $this->name;
    }

    abstract public function speak();
}



