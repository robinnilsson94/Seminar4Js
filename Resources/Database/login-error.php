
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="Resources/Css/reset.css">
    <link rel="stylesheet" type="text/css" href="Resources/Css/styles.css">
    <style type="text/css">
      
        .wrapper{ width: 350px; padding: 20px;  border-radius: 5px; }
    </style>
</head>
<body>
<ul>
     <li><a href=Resources/Views/home.php>Home</a></li>
  <li><a href=Resources/Views/calendar.php>Calendar</a></li>
  <li style="float:right"> <a href=Resources/Views/register.php>Register</a></li>
   <?php if($_SESSION['loggedin'] == false) {
  echo '<li style="float:right"><a href=login.php>Log in</a></li>'; 
  }
  else {
    echo '<li style="float:right"><a href=logout.php>Log out</a></li>';
  } ?>
</ul>

    <div class="wrapper">
        <h2>Log in</h2>
        <p class= black>Enter user info to log in.</p>
        <form action="do-login.php" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username:<sup>*</sup></label>
                <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password:<sup>*</sup></label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
            <p class= black>Don't have an account yet? <a href="Resources/Views/register.php">Register now!</a></p>
        </form>
    </div>    
</body>
</html>