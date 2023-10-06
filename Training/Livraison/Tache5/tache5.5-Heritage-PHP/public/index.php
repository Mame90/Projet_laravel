<?php 
use \class\CoffeMachine;
use class\PremiumCoffeMachine;
//*************************Heritage en programmation objet*******************************************//

 require '../vendor/autoload.php';
$CoffMachine= new PremiumCoffeMachine(3);
$CoffMachine->select('vanilla');



?> 