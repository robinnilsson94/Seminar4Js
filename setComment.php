<?php
require_once 'Resources/Fragments/init.php';
  use Controller\Controller;
  $contr = Controller::getController();
  $review = $_GET['review'];
  $username = $_GET['username'];
  $table = $_GET['recipe'];
  if (ctype_print($review)){
      $contr->postReview($review, $username, $table);
  }
 
  $completed = true;
  echo \json_encode($completed);     
