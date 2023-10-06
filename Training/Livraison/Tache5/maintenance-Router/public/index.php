<?php 

use Router\Router;
use Exceptions\RouteNotFoundExceptions;







//*************************Les routeures-------->>>>>>  :) programmation orienter objet *******************************************//

 require '../vendor/autoload.php';
  $router= new Router();

$router->register('/', function(){
  return 'HomePage';
});

$router->register('/contact', function(){
    return 'Contact page';
   });
//   echo '<pre>';
//  var_dump($router);
//  echo '</pre>';

try{
    echo $router->resolve($_SERVER['REQUEST_URI']);
} catch(RouteNotFoundExceptions $e)
  {
    echo $e->getMessage();
  }
?> 