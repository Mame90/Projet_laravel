<?php
namespace class;
namespace class\Contracts;

use class\CoffeMaker;



class EspressoMachine extends CoffeMaker implements EspressoCoffeeInterface
{
    public function makeEspresso(): string
    {
        return static::class. 'fait un cafe espresso';
    }
}








?>