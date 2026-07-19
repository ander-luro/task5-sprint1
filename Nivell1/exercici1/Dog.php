<?php 
declare(strict_types=1);

class Dog extends Animal{
    public function speak() : void {
        echo "Woof" . PHP_EOL;
    }
}