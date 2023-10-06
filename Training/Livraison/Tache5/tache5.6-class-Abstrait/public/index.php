<?php 
use class\Renault;
use \class\Peugeot;
// use \class\Vehicule;

//*************************Les classes abstraits en programmation objet*******************************************//

 require '../vendor/autoload.php';

$peugeot= new Peugeot('peugeot');
$renault= new Renault('Renault');
var_dump($peugeot->marque());
var_dump($renault->marque());
?> 