<?php 




//*************************La gestion des excptions en  programmation orienter objet PHP *******************************************//

use class\USer;
use class\Login;
use class\Exceptions\UserIsbanException;
use class\Exceptions\UserNotVerifiedException;

 require '../vendor/autoload.php';
  $user = new User('mbayeDev','diop44');
  $login = new Login($user);

 try{
    $login->login();
    }  
    catch(\Exception $e) // exception sur utilisateur non verifier 
      {
     echo $e->getMessage().' dans le fichier'.$e->getFile();
      }  
      
      
//        catch(UserNotVerifiedException $e) // exception sur utilisateur non verifier 
//  {
//  echo $e->getMessage().' dans le fichier'.$e->getFile();
//  }

//  catch(UserIsbanException $e)   // exceptions sur un utilisateur bannie
//  {
//  echo $e->getMessage().' dans le fichier'.$e->getFile();
//  }
?> 