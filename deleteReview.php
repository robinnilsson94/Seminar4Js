<?php
require_once 'Resources/Fragments/init.php';
  use Controller\Controller;
  $contr = Controller::getController();
 if (isset($_POST['delete']))
    {  
         $table = $_POST['table'];
         $next =  $_POST['next'];
         $id= $_POST['id'];
         $contr->deleteReview($table, $id);
    header($next);
       }
