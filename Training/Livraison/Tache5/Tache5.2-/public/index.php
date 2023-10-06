<?php 
/*  ******************************Troisieme Partie POO les autoloader****************************************************** */


//importation des classes avec la fonction require_once();
//  require_once ('./class/stripe/payment.php');
//  require_once('./class/Paypal/payment.php');
//  require_once('./class/Users/user.php');
   /*  LES AUTOLOADER permet de recuperer les require_once  */
    //  spl_autoload_register(function($class){
    //      $path= dirname(__DIR__).'/'.str_replace('\\','/',$class).'.php'; //  les dirname me permet de placer directement le fichier dans le dossier racine ici le dossier public
    //       if(file_exists($path))
    //        require $path;
    //  });
// **************** option d'autoloader  avec utlisation de composer
 require '../vendor/autoload.php';


use \class\Paypal\payment as Paypalpayment;  // usage des espaces de nom
use \class\stripe\payment; 
use \Colors\RandomColor;

 $paymentPaypal= new Paypalpayment();
$paymentStrip= new payment();

// var_dump($paymentPaypal,$paymentStrip);
var_dump(RandomColor::one());
?> 