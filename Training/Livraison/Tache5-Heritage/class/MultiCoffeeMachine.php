<?php
namespace class;
 
class MultiCoffeeMachine extends CoffeMaker implements EspressoMachine,IrishCoffeMachine
{
 public function makeIrishCoffee():string{
    return  static::class. 'fait un irishCoffee';
 }

 
 public function makeEspresso():string{
    return  static::class. 'fait un espresso cafe';
 }
}

?>