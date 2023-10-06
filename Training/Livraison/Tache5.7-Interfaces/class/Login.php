<?php
namespace class;

use class\Exceptions\UserIsbanException;
use class\Exceptions\UserNotVerifiedException;



class Login{

    public function __construct(public User $user)
{}
public function login(): bool
{
    if(!$this->user->Isverified()){
        // echo ' erreur, utilisateur non verifié  ';
       
        throw new  UserNotVerifiedException();
    }

    if($this->user->Isban()){
    
        throw new  UserIsbanException();

    }

    return true;
}


}


?>