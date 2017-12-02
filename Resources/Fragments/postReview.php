 <?php if($_SESSION['loggedin'] == false) {
  echo   '<div>
           Log in to review the recipe. 
        </div>'; 
  }
  else {
      echo
        "<form  method = 'POST' action = '../../setComment.php'>
        <p> Write your review here: </p>  <textarea rows = '10' cols = '30' name = 'review'></textarea><br/>  <input type= 'hidden' name = 'table' value='$table'> 
       <input type= 'hidden' name = 'username' value='$username'>  <input type='hidden' name='next' value='$url'>
       <button type = 'submit' name = 'reviewSubmit'> Post </button>
        </form>";
    }
  ?>