<?php
require_once 'Resources/Fragments/init.php';

  use Controller\Controller;
  $contr = Controller::getController();
$reviews = $contr->getReviews($_GET['table']);
 echo \json_encode($reviews);
 