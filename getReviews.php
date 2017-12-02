<?php
use Util\StartUp;

require_once 'classes/Util/StartUp.php';
StartUp::initRequest2();

  use Controller\Controller;
  $contr = Controller::getController();
$contr->getReviews($table);