<?php 

use Router\Router;
use Exceptions\RouteNotFoundExceptions;

//*************************Les routeures-------->>>>>>  :) programmation orienter objet *******************************************//

 require '../vendor/autoload.php';

 define('BASE_VIEW_PATH', dirname(__DIR__). DIRECTORY_SEPARATOR .'views'. DIRECTORY_SEPARATOR);

 $router= new Router();


$router->register('/',['Controllers/HomeController','index']);


// $router->register('/contact', function(){
//     return 'Contact page';
//    });


//   echo '<pre>';
// //  var_dump($router);    
// var_dump(explode('?',$_SERVER['REQUEST_URI']));
// echo '</pre>';
echo $router->run($_SERVER['REQUEST_URI']);

// try{
//     echo $router->run($_SERVER['REQUEST_URI']);
// } catch(RouteNotFoundExceptions $e)
//   {
//     echo $e->getMessage();
//   }


?> 