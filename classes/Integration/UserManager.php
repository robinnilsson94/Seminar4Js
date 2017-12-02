<?php

namespace Integration;

class UserManager {


    public function logOut(){
          session_start();
          $_SESSION = array();
          session_destroy();
          header("location: Resources/Views/login.php");
          exit;
    }
  
    public function login(string $user, string $thePassword){
     require_once 'Resources/Database/config.php';
 
$username = $password = "";
$username_err = $password_err = "";
 
    if(empty(trim($user))){
        $username_err = 'Please enter username.';
    } else{
        $username = trim($user);
    }
    
    if(empty(trim($thePassword))){
        $password_err = 'Please enter your password.';
    } else{
        $password = trim($thePassword);
    }
    
    if(empty($username_err) && empty($password_err)){
        $sql = "SELECT username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            $param_username = $username;
            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
              
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    mysqli_stmt_bind_result($stmt, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            session_start();
                            $_SESSION['username'] = $username;      
                            header("location: welcome.php");
                        } else{
                            $password_err = 'The password you entered was not valid.';
                        }
                    }
                } else{
                    $username_err = 'No account found with that username.';
                }
            } else{
                echo "Some mistake was made. Please try again later.";
            }
        }
        
        mysqli_stmt_close($stmt);
    }
      if(!empty($username_err) || !empty($password_err)){
          include 'Resources/Database/login-error.php';
      }
    mysqli_close($link);   
    }
}
