<?php


namespace class;

use class\Traits\Mailable;

 class User
{
  use  Mailable;
    public function authenticated():string
    {
        return 'authentification';
    }
   
}
?>