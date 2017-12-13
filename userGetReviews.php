<?php
use Util\StartUp;

require_once 'classes/Util/StartUp.php';
StartUp::initRequest2();

  use Controller\Controller;
  $contr = Controller::getController();
 $reviews = $contr->getReviews($table);
Foreach ($reviews as $review){
    if ($contr->getUsername($review)!= $username){
         echo "<div>";    
        echo "<p class = username>";
        echo "Reviewer: ";    
        echo $contr->getUsername($review)."<br>";  
        echo "</p>";
        echo $contr->getReview($review)."<br>";
    echo "</div>";
    }
    else {
         echo "<div class = 'yellow'>";    
        echo "<p class = username>";
        echo "Reviewer: ";    
        echo $contr->getUsername($review)."<br>";  
        echo "</p>";
        echo $contr->getReview($review)."<br>";
    echo "<form method = 'POST' action = '..\..\deleteReview.php'> <input type= 'hidden' name = 'id' value='".$contr->getID($review)."'> <input type= 'hidden' name = 'next' value='$url'> <input type= 'hidden' name = 'table' value=$table> <button name = 'delete'>Delete </button> </form>";
  echo "</div>";
}

    }