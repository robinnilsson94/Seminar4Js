<?php

 include '../Fragments/sessionStart.php' ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../Css/reset.css">
    <link rel="stylesheet" type="text/css" href="../Css/styles.css">
    <style type="text/css">
      
        .wrapper{ width: 350px; padding: 20px;  border-radius: 5px; }
    </style>
</head>
<body>
 <?php include '../Fragments/navigationBar.php' ?>
    <div class="wrapper">
        <h2>Log in</h2>
        <p class= black>Enter user info to log in.</p>
        <form action="../../do-login.php" method="post">
            <div class="form-group">
                <label>Username:<sup>*</sup></label>
                <input type="text" name="username"class="form-control">
            </div>    
            <div class="form-group">
                <label>Password:<sup>*</sup></label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
            <p class= black>Don't have an account yet? <a href="register.php">Register now!</a></p>
        </form>
    </div>    
</body>
</html>

