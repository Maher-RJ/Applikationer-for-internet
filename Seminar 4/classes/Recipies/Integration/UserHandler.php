<?php

namespace Recipies\Integration;

use Recipies\Model\User;

class UserHandler {

    public function login($name, $password) {
    
    $db = new DbAccess();
    
    if ($db->authUser($name, $password))
    {
            $_SESSION['name'] = $name;
            return true;
    }
    else return false;
    }

}   

?>