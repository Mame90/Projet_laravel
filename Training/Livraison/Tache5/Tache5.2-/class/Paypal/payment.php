<?php
namespace class\Paypal;
use \class\Users\User;  // -------------importation de la classe User dans la class Paypal/payment------------- //
use DateTime;             // -------------importation de la class DateTime()------------- //

class payment{

    public function __construct()
    {
        var_dump(new DateTime());
        var_dump(new User());
        
    
}

    
}

?>