<?php

namespace Recipies\Integration;

use Recipies\Model\Comment;

class CommentHandler {

    public function addComment($name, $comment, $dish){
        $db = new DbAccess();
        $comment = htmlentities($comment, ENT_QUOTES);
        if(ctype_print($comment) AND (!empty($comment))){
        $newcomment = new Comment($name, $comment, $dish, NULL);

        $db->insertComment($newcomment);
    }
    
    }
    public function getComments($dish){
      $db = new DbAccess();
      return $db->getComment($dish);
    }
    
    public function deleteComment($id){
            
        $db = new DbAccess();
        if ($db->deleteComment($id)){

            return true;
        }
        else return false;
    }
        
}
