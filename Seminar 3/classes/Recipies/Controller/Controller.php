<?php

namespace Recipies\Controller;

use Recipies\Integration\UserHandler;
use Recipies\Integration\CommentHandler;


class Controller {
    
    private $uhandler;
    private $chandler;
        
    public function __construct(){
        $this->uhandler = new UserHandler();
        $this->chandler = new CommentHandler();
    }

    public function loginUser($name, $password){
       $this->uhandler->login($name, $password);
    }
    
    public function storeComment($name, $comment, $dish){
        $this->chandler->addComment($name, $comment, $dish);
    }
    
    public function getComments($dish){
        $comments = $this->chandler->getComments($dish);
        return $comments;
    }
    
    public function deleteComment($time){
        $this->chandler->deleteComment($time);
    }
}
