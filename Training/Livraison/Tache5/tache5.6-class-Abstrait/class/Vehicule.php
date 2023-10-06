<?php
namespace class;

 abstract  class Vehicule     //  class vehcule est une class abstrait //
{
    public function __construct(protected string $marque)
    {
        
    }
   abstract public function marque(): string;    // la methode marque  est une methode abstrait
     
        
    
}

?>
