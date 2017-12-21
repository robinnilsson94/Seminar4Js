<?php
require_once 'Resources/Fragments/init.php';
  use Controller\Controller;
  $contr = Controller::getController();
  $contr->deleteReview($_GET['table'], $_GET['username']);
  $deleted = true; 
  echo \json_encode($deleted);
