<?php 

use class\OfficeReservation;

 use class\Enums\OfficeStatus;


 require '../vendor/autoload.php';

 $information= new OfficeReservation('je veux une reservation poue la semaine a venir');
var_dump($information::getCount()); 
?> 