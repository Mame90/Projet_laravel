<?php
// class cart

// {
//     //private $quantity=0;
//     // declaration des variables privee
// //private int $quantity;               
// private float $totalPrice ;          
//  public int $quantity; 
//  //public float $totalPrice ;
// // constructeur d'object
// public function __construct(int $quantity,float $totalPrice)
// {
//     // initialisation
//   $this->quantity= $quantity;   
//   $this->totalPrice=$totalPrice;
// }
 //****Le code d'en haut est identique a celui du code qui est en bas  voir le constructeur et les declarations des elements */
//----------------------------------------------------------------
class cart

{
public function __construct
(
  int $quantity,
  float $totalPrice
  ){ }
//----------------------------------------------------------------

//declaration d'une methode ou d'une fonction en php avec les getters et les setters
public function getTotalprice() :float
 {
 return $this->totalPrice;
 }
 // declaration d'une fonction setter;
 public function setTotalPrice(float $price): void
 {
      $this->totalPrice=$price;
 }
 //pour une methode de remise je vfait:
 public function discount(float $discount): void
{
   $this->totalPrice -=  $this->totalPrice * ($discount/100);
   
}
}
?>