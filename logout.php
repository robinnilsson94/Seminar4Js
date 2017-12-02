<?php
require_once 'Resources/Fragments/init.php';
  use Controller\Controller;
  $contr = Controller::getController();
  
  $contr->logOut();
?>