<?php
namespace class;


 class Peugeot   extends Vehicule 
 {
    public function marque(): string
    {
        return 'je suis une voiture francais, et je roule en peugeot'.'<br/>';
        
        
        // Ici il me generer unee erreur si j'essaye d'utiliser d'acceder avec la methode $this->marque();
  //      return 'je suis une voiture francais, et je roule en peugeot'. $this->marque()
// Fatal error: Allowed memory size of 536870912 bytes exhausted (tried to allocate 262144 bytes) 
// in C:\xampp_New\htdocs\BakeliShoolTechnology\Training\Livraison\tache5.6--\class\Peugeot.php on line 9
    }
 }

?>