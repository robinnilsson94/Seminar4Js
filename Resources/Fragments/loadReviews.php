        <span> </span>
<?php
     if($_SESSION['loggedin'] == false) {
  include '../../getReviews.php';          
  }
 else {
     include '../../userGetReviews.php';      
 }
?>
      