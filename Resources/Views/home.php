<?php require_once '../Fragments/sessionStart.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tasty Recipes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../Css/reset.css">
        <link rel="stylesheet" type="text/css" href="../Css/styles.css">

</head>

<body> 

 <?php include '../Fragments/navigationBar.php' ?>
        <h1>Tasty Recipes</h1>
        <p id=special>A good recipe for life</p>
        <span> </span>
         <?php if($_SESSION['loggedin'] == false) {
  echo '<h2 id=center> Welcome to Tasty Recipes! The last recipe book you will ever need! </h2>'; 
  }
  else {
     echo '<h2 id=center> Welcome, '; echo $username; echo ' to Tasty Recipes! The last recipe book you will ever need! </h2>';
  } ?>
         
        <span> </span> 
        <a href="calendar.php">
            <img id=calendar src="../../calendar.jpg" alt="Calendar" style="width:420px;height:420px;border:0;">
        </a>
         <p id=moved>Recommended Recipes</p>
         <img src="../../underthecal.jpg" alt="UnderCal">
        <a href="Meatballs.php">
            <img src="../../meatballs.jpg" alt="Meatballs" style="width:275px;height:242px;border:0;">
        </a>
        <a href="Pancakes.php">
            <img src="../../pancakes.jpg" alt="pancakes" style="width:275px;height:242px;border:0;">
        </a>
        
    </body>
</html>
