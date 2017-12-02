
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="Resources/Css/reset.css">
    <link rel="stylesheet" type="text/css" href="Resources/Css/styles.css">
    <style type="text/css">
        
        .wrapper{ width: 350px; padding: 20px; border-radius: 5px;}
    </style>
</head>
<body>
<ul>
     <li><a href=Resources/Views/home.php>Home</a></li>
  <li><a href=Resources/Views/calendar.php>Calendar</a></li>
  <li style="float:right"> <a href=Resources/Views/register.php>Register</a></li>
   <?php if($_SESSION['loggedin'] == false) {
  echo '<li style="float:right"><a href=Resources/Views/login.php>Log in</a></li>'; 
  }
  else {
    echo '<li style="float:right"><a href=logout.php>Log out</a></li>';
  } ?>
</ul>
    <div class="wrapper">
        <h2>Register</h2>
        <?php if($_SESSION['loggedin'] == true) {
  echo '<p class= black>Do you really need a second account?</p>'; 
  }
  else {
    echo '<p class= black>Create your free account now to get started!</p>';
  }
  ?>
        <form action="do-register.php" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username:<sup>*</sup></label>
                <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password:<sup>*</sup></label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password:<sup>*</sup></label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p class= black>Already a member? <a href="Resources/Views/login.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>
