<?php

namespace Controller;

use Integration\DatabaseManager;
use Integration\UserManager;

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
    $this->dbM->getReviews($table);
}
public function userGetReviews(string $username,string $table,string $url){
    $this->dbM->getReviews($username,$table,$url);
}

public function logOut(){
    $this->usM->logOut();
}

public function login(string $username, string $password){
    $this->usM->login($username, $password);
}
}