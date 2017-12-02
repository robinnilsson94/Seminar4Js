<?php

require_once 'Resources/Fragments/init.php';
  use Controller\Controller;
  $contr = Controller::getController();
$username = $_POST["username"];
$password = $_POST["password"];

$contr->login($username, $password);


