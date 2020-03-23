<?php

namespace Recipies\Model;

class User {
    
    private $userName;
    private $password;
    
    public function __construct($userName, $password) {
        $this->userName = $userName;
        $this->password = $password;
    }
    
    public function getUsername(){
        return $this->userName;
    }

        public function setPassword($password){
        $this->password = $password;
    }
    
    public function getPassword(){
        return $this->password;
    }
    
}

