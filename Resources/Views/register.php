<?php include '../Fragments/sessionStart.php' ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="../Css/reset.css">
    <link rel="stylesheet" type="text/css" href="../Css/styles.css">
    <style type="text/css">
        
        .wrapper{ width: 350px; padding: 20px; border-radius: 5px;}
    </style>
</head>
<body>
 <?php include '../Fragments/navigationBar.php' ?>
    <div class="wrapper">
        <h2>Register</h2>
        <?php if($_SESSION['loggedin'] == true) {
  echo '<p class= black>Do you really need a second account?</p>'; 
  }
  else {
    echo '<p class= black>Create your free account now to get started!</p>';
  }
  ?>
        <form action="../../do-register.php" method="post">
            <div class="form-group">
                <label>Username:<sup>*</sup></label>
                <input type="text" name="username"class="form-control">
            </div>    
            <div class="form-group">
                <label>Password:<sup>*</sup></label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label>Confirm Password:<sup>*</sup></label>
                <input type="password" name="confirm_password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p class= black>Already a member? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>