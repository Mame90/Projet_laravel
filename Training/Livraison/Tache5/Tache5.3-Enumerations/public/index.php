<?php 

use class\OfficeReservation;

 use class\Enums\OfficeStatus;


 require '../vendor/autoload.php';

 
  $reservation= new OfficeReservation();
// var_dump($reservation);
 if(OfficeStatus::APPROVAL_PENDING === $reservation ->status) echo "demande en cours  ";
//  if($status === Reservation::APPROVAL_PENDING) echo "demande en cours d'attentes";
//  else echo "Demande rejetees";

?> 