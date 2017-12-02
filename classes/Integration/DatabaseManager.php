<?php

namespace Integration;

class DatabaseManager {
    
public function postReview(string $review,string $username,string $table){
    {
         require_once '../../Resources/Database/config2.php';    
         
       $sql = "INSERT INTO $table (username, review) VALUES ('$username', '$review' )";
   $result = mysqli_query($link, $sql);
       }

}

public function deleteReview(string $table,int $id){
 require_once '../../Resources/Database/config2.php';    
       $sql = "DELETE FROM $table WHERE id='$id'";
    $result = mysqli_query($link, $sql);
}

public function getReviews(string $table){
     require_once '../../Resources/Database/config2.php'; 
     $sql = "SELECT * FROM $table";
    $result = $link->query($sql);
    while ($row = $result->fetch_assoc()){
    echo "<div>";    
        echo "<p class = username>";
        echo "Reviewer: ";    
        echo $row['username']."<br>";  
        echo "</p>";
        echo $row['review']."<br>";
    echo "</div>";
    }
}
function userGetReviews(string $username,string $table,string $url){
     require_once '../../Resources/Database/config2.php'; 
    $sql = "SELECT * FROM $table";
    $result = $link->query($sql);
    while ($row = $result->fetch_assoc()){
    if ($row['username']!= $username){
         echo "<div>";    
        echo "<p class = username>";
        echo "Reviewer: ";    
        echo $row['username']."<br>";  
        echo "</p>";
        echo $row['review']."<br>";
    echo "</div>";
    }
    else {
         echo "<div class = 'yellow'>";    
        echo "<p class = username>";
        echo "Reviewer: ";    
        echo $row['username']."<br>";  
        echo "</p>";
        echo $row['review']."<br>";
    echo "<form method = 'POST' action = '../../deleteReview.php'> <input type= 'hidden' name = 'id' value='".$row['id']."'> <input type= 'hidden' name = 'next' value='$url'> <input type= 'hidden' name = 'table' value=$table> <button name = 'delete'>Delete </button> </form>";
  echo "</div>";
    }
       
    }
}
}