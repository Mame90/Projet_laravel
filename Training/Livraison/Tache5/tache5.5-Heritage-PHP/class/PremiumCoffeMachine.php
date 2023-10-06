<?php
namespace class;

 class PremiumCoffeMachine extends CoffeMachine 
 {
  public  int $cups=2;

  public function select(string $selection){
    $result =match($selection){
        'espresso'=>$this->makeEspresso(),
        'vanilla'=>$this->makeVanilla(),
        default =>'erreur'
    };
    return $result;
 }
 protected function makeVanilla(){
    for($i= 0 ; $i < $this->cups;$i++ )
    {
        echo 'cafe Vanille n°' . $i +1 . ' servi !!!';
    }
 }
}


?>


