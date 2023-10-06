<?php
namespace class;

//   final class CoffeMachine  si la classe est precede du mot final fie que la classs ne pourra pas etre etendre a d'autess class;
   class CoffeMachine
 {
  protected  int $cups;
   public function __construct(int $cups)
   {
    $this->cups= $cups;
   }


 public function select(string $selection){
    $result =match($selection){
        'espresso'=>$this->makeEspresso(),
        default =>'erreur'
    };
    return $result;
 }
 protected function makeEspresso(){
    for($i= 0 ; $i < $this->cups;$i++ )
    {
        echo 'cafe Espresso n°' . $i +1 . ' servi !!!';
    }
 }
}


?>


