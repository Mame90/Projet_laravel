<?php 




//*************************Les Interfaces en PHP  :) programmation orienter objet *******************************************//
use class\CoffeMaker;
use class\EspressoMachine;
use class\IrishCoffeMachine;


 require '../vendor/autoload.php';
 $espresso= new EspressoMachine();
 $irishCoffee = new IrishCoffeMachine();
 var_dump(
    $espresso->makeEspresso(),
    $irishCoffee->makeIrishCoffee(),

    $espresso->makecoffe(),
    $irishCoffee->makecoffe()
 )

?> 