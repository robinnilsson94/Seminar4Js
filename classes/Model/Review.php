<?php

namespace Model;

class Review {
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
}
