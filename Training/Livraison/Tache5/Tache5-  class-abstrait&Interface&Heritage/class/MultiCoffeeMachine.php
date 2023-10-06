<?php
namespace class;

use class\Contracts\EspressoCoffeeInterface;
use class\Contracts\IrishCoffeeInterface;

class MultiCoffeeMachine extends CoffeMaker implements EspressoCoffeeInterface,IrishCoffeeInterface
{
 public function makeIrishCoffee():string{
    return  static::class. '  fait un irishCoffee';
 }

 
 public function makeEspresso():string{
    return  static::class. '  fait un espresso cafe';
 }
}

?>