<?php
session_start();
 if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  $_SESSION['loggedin'] = false;
}
else {
     $_SESSION['loggedin'] = true;
     $username = $_SESSION['username']; 
}
?>