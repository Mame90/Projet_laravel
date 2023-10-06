<?php
namespace class;

use class\Enums\OfficeStatus;


 class OfficeReservation
 {

 public OfficeStatus $status; //declaration de la variable status;

  public    function __construct()
  {
    $this->status = OfficeStatus::APPROVAL_PENDING;


    // echo self::APPROVAL_PENDING; 
    // Tous les deux instructions sont identiques par rapport a la premiers car elles affiches les mm resultats
    // echo $this::APPROVAL_PENDING;
    // echo Reservation::APPROVAL_PENDING;
  }

}


?>


