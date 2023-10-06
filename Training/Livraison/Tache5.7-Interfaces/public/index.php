<?php 

use Router\Router;


//*************************La gestion des routes en programmation orienter objet PHP *******************************************//


require '../vendor/autoload.php';

  $router= new Router();


  $router->register('/',function(){
    return 'HomePage';
  });

  $router->register('/contact',function(){
    return 'Contact page';
  });
  echo '<pre>';
  var_dump($SERVER['REQUEST_URI']);  
  echo '</pre>';
  // $route->resolver();
?> 