<?php
namespace Recipies\Model;

class Comment {
    
    private $userName;
    private $comment;
    private $timestamp;
    private $dish;
    private $id;
    
    public function __construct($userName, $comment, $dish, $id){
        $this->userName = $userName;
        $this->comment = $comment;
        $this->timestamp = time();
        $this->dish = $dish;
        $this->id = $id;
    }
    
    public function setDish($dish){
        $this->deleted = $dish;
    }
    
    public function getDish(){
        return $this->dish;
    }
    
    public function setName($userName){
        $this->userName = $userName;
    }
    
    public function setComment($comment){
        $this->comment = $comment;
    }
    
    public function setTime(){
        $this->timestam = time();
    }
    
    public function getName(){
        return $this->userName;
    }
    
    public function getTime(){
        return $this->timestamp;
    }
    
    public function getComment(){
        return $this->comment;
    }

    public function getId(){

        return $this->id;
    }

}
