<?php
require_once 'Resources/Fragments/init.php';
  use Controller\Controller;
  $contr = Controller::getController();
if (isset($_POST['reviewSubmit']))
    {
         $review = $_POST['review'];
         $username = $_POST['username'];
         $table = $_POST['table'];
         $next =  $_POST['next'];
         $contr->postReview($review, $username, $table);
    header($next);
       }
