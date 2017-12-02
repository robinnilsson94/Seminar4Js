<?php
session_start();
 
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: Resources/Views/login.php");
  exit;
}

  $_SESSION['loggedin'] = true;
 header("location: Resources/Views/home.php");
  ?>
 