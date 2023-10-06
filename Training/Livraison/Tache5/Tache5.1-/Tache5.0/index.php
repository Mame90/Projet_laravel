<?php 
/*  ******************************Premiere Partie POO****************************************************** */

// require_once('./class/cart.php');
// // creation d'object cart
// $cart=new cart(199,500 );
// //var_dump($cart);
// $cart -> setTotalPrice(5000);  // definition du nouveau variable
// $cart->discount(5); //cette variable perme d'effectuer des remise sur la prix total (totlaPrice)
//  var_dump($cart->getTotalprice());  // affichage du nouveu variable avec le getter (getTotalPrice);

/*  *****************************************End premiere partie******************************************* */
/*  ******************************Deuxieme Partie POO****************************************************** */

use \class\Paypal\payment as Paypalpayment;  // usage des espaces de nom
use \class\stripe\payment;

// importation des classes avec la fonction require_once();
require_once ('./class/stripe/payment.php');
require_once('./class/Paypal/payment.php');
require_once('./class/Users/user.php');
$paymentPaypal= new Paypalpayment();
$paymentStrip= new payment();

var_dump($paymentPaypal, $paymentStrip);
?> 