<?php
use Util\StartUp;

require_once 'classes/Util/StartUp.php';
StartUp::initRequest2();

  use Controller\Controller;
  $contr = Controller::getController();
$reviews = $contr->getReviews($table);
Foreach ($reviews as $review){
     echo "<div>";    
        echo "<p class = username>";
        echo "Reviewer: ";    
        echo $contr->getUsername($review)."<br>";  
        echo "</p>";
        echo $contr->getReview($review)."<br>";
    echo "</div>";
}