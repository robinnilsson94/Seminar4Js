<ul>
     <li><a href=home.php>Home</a></li>
  <li><a href=calendar.php>Calendar</a></li>
  <li style="float:right"> <a href=register.php>Register</a></li>
   <?php if($_SESSION['loggedin'] == false) {
  echo '<li style="float:right"><a href=login.php>Log in</a></li>'; 
  }
  else {
    echo '<li style="float:right"><a href=../../logout.php>Log out</a></li>';
  } ?>
</ul>
