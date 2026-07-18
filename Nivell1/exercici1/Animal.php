<?php

abstract class Animal {
    private string $name;

    function __construct(string $name){
        $this->name = $name;
    }

    public function getName() : string {
        return $this->name;
    }

    abstract public function Speak();
}

class Dog extends Animal{
    public function Speak() : void {
        echo "Woof" . PHP_EOL;
    }
}

class Cat extends Animal{
    public function Speak(){
        echo "Miau" . PHP_EOL;
    }
}