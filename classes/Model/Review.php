<?php

namespace Model;

class Review implements \JsonSerializable{
    private $username;
    private $review;
    private $id;

    public function __construct($username, $review, $id) {
        $this->username = $username;
        $this->review = $review;
        $this->id = $id;
    }
    
    public function getReview() {
        return $this->review;
    }
    public function getUsername() {
        return $this->username;
    }
    public function getID() {
        return $this->id;
    }
    
    public function jsonSerialize() {
        $json_obj = new \stdClass();
         $json_obj->review = $this->review;
         $json_obj->username = $this->username;
         $json_obj->id = $this->id;
         
         return $json_obj;
    }
}
