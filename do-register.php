<?php

require_once 'Resources/Fragments/init.php';
  use Controller\Controller;
  $contr = Controller::getController();
$username = $_POST["username"];
$password = $_POST["password"];
$confirmpassword =  $_POST["confirm_password"];
$contr->register($username, $password, $confirmpassword);
