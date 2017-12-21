        <span> </span>
<?php
     if($_SESSION['loggedin'] == false) {
      include '../Fragments/reviewGet.php';
  }
 else {
     include '../Fragments/userReviewGet.php';      
 }
?>
      