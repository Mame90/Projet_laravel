<?php 




//*************************Les Interfaces en PHP  :) programmation orienter objet *******************************************//
use class\CoffeMaker;
use class\EspressoMachine;
use class\IrishCoffeMachine;
use class\MultiCoffeeMachine;

 require '../vendor/autoload.php';
 $espresso= new EspressoMachine();
 $irishCoffee = new IrishCoffeMachine();
 $multicoffeeMachine= new MultiCoffeeMachine();

var_dump($espresso->makeEspresso(),$espresso->makecoffe(),
$irishCoffee->makeIrishCoffee(),
$multicoffeeMachine->makecoffe()

) 
?> 