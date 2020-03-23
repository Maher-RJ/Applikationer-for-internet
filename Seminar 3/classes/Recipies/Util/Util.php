<?php
namespace Recipies\Util;


final class Util {
    
    private function __construct() {
        
    }
        
    public static function initRequest() {
    spl_autoload_register(function ($class) {
        require_once 'classes/' . \str_replace('\\', '/', $class) . '.php';
    });

     	@session_start();
    }   
    
}
