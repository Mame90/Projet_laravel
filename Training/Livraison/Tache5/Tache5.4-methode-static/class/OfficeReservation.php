<?php
namespace class;

 class OfficeReservation
 {

  private static  int $count =0;
   public function __construct(public string $iinformation)
   
   {}
   public static function getCount(): int     //recuperation d'une methode prive
   {
    return self::$count; 
   }

}


?>


