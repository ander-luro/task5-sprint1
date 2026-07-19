<?php
declare(strict_types=1);

class Cow extends Animal{
    public function speak() : void {
        echo "Muuuu" . PHP_EOL;
    }
}