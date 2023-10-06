<?php 




//*************************Les Interfaces en PHP  :) programmation orienter objet *******************************************//
use class\CoffeMaker;
use class\EspressoMachine;
use class\Invoice;
use class\IrishCoffeMachine;
use class\MultiCoffeeMachine;
use class\User;

 require '../vendor/autoload.php';
 $voice= new Invoice();
 $user= new User();

var_dump($voice->download(),$user->authenticated()) 
?> 