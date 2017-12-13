<?php

namespace Controller;

use Integration\DatabaseManager;
use Integration\UserManager;
use Model\Review;

Class Controller {
    private $dbM;
    private $usM;
    
    public function __construct() {
        $this->dbM = new DatabaseManager();
        $this->usM = new UserManager();
    }

 public static function getController() {
            return new Controller();
        }
    
public function postReview(string $review,string $username,string $table){
    $this->dbM->postReview($review, $username, $table);
}
public function deleteReview(string $table,int $id){
    $this->dbM->deleteReview($table,$id);
}
public function getReviews(string $table){
    return $this->dbM->getReviews($table);
}
public function getUsername(Review $review){
    return $review -> getUsername();
}
public function getReview(Review $review){
    return $review -> getReview();
}
public function getID(Review $review){
    return $review -> getID();
}
public function userGetReviews(string $username,string $table,string $url){
    $this->dbM->userGetReviews($username,$table,$url);
}
public function createReview(string $username, string $review, int $id){
    return new Review($username, $review, $id);
}

public function logOut(){
    $this->usM->logOut();
}

public function login(string $username, string $password){
    $this->usM->login($username, $password);
}
public function register(string $username, string $password, string $confirmpassword){
    $this->usM->register($username, $password, $confirmpassword);
}
}