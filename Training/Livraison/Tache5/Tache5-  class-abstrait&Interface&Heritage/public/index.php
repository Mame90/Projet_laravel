<?php 




//*************************Les Interfaces en PHP  :) programmation orienter objet *******************************************//
use class\CoffeMaker;
use class\EspressoMachine;
use class\IrishCoffeMachine;
use class\MultiCoffeeMachine;

 require '../vendor/autoload.php';

$multicoffeeMachine= new MultiCoffeeMachine();
var_dump($multicoffeeMachine->makeEspresso(),
$multicoffeeMachine->makeIrishCoffee(),
$multicoffeeMachine->makecoffe()

) 
?> 