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


    /* public function login($name, $password) {
        if (ctype_print($name) AND ctype_print($password) AND ( !empty($name)) AND ( !empty($password))) {

            $users = explode(";\n", file_get_contents($this->file));
            $user = new User($name, $password);
            for ($i = 1; $i < count($users); $i++) {
                $compUser = unserialize($users[$i]);
                if ($compUser instanceof $user) {
                    if (password_verify($password, $compUser->getPassword())) {
                        if ($compUser->getUsername() == $name) {
                            $_SESSION['name'] = $name;
                        }
                    }
                }
            }
        } else {
            header('Location: login.php');
        }
    } */
    
    
   }   

?>

