<?php

namespace Recipies\Controller;

use Recipies\Controller\Controller;

class SessionManager {
    
    public static function getController(){
        if(isset($_SESSION['controller'])){
            return $_SESSION['controller'];
        }
        else{
            return new Controller();
        }
    }
    
    public static function storeController(Controller $controller){
        $_SESSION['controller'] = $controller;
    }
    
}
