<?php

namespace Integration;
use Controller\Controller;

class DatabaseManager {
    
public function postReview(string $review,string $username,string $table){
    {
         require_once 'Resources/Database/config2.php';    
         
       $sql = "INSERT INTO $table (username, review) VALUES ('$username', '$review' )";
   $result = mysqli_query($link, $sql);
       }

}

public function deleteReview(string $table,int $id){
 require_once 'Resources/Database/config2.php';    
       $sql = "DELETE FROM $table WHERE id='$id'";
    $result = mysqli_query($link, $sql);
}

public function getReviews(string $table){
     require_once '../../Resources/Database/config2.php'; 
     $sql = "SELECT * FROM $table";
    $result = $link->query($sql);
    $reviews = array();
    $contr = Controller::getController();
    while ($row = $result->fetch_assoc()){
    $reviews[] = $contr -> createReview($row['username'], $row['review'], $row['id']);
    }
    return $reviews;
}  
}
