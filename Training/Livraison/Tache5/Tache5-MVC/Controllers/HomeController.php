<?php
namespace Controllers;

use Source\Renderer;

class HomeController{
 
    public function index(){
        return Renderer::make('home/index');
        
    }
        }

?>