<?php
namespace class;

use class\Contracts\IrishCoffeeInterface;

class IrishCoffeMachine extends CoffeMaker implements IrishCoffeeInterface
{
    public function makeIrishCoffee(): string
    {
        return static::class. 'fait un irishCoffee ';
    }
}








?>