<?php
require_once '../Fragments/sessionStart.php';
$table = "reviewTable";
$url = "location: Resources/Views/Pancakes.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pancakes recipe</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" type="text/css" href="../Css/reset.css">
         <link rel="stylesheet" type="text/css" href="../Css/styles.css">
    </head>
    <body>
     <?php include '../Fragments/navigationBar.php' ?>
       <h1>Tasty Recipes</h1>
       <p id=special>A good recipe for life</p>
       <h3>Pancakes</h3>
       <p id=special2>People who likes this recipe also liked</p>
       <img id=pan src="../../pancakes.jpg" alt="Pancakes">
       <a href="Meatballs.php">
            <img id= balls src="../../meatballs.jpg" alt="Meatballs" style="width:275px;height:242px;border:0;">
        </a>
       <span> </span>
       <h3>Ingredients</h3>
        <p>
           1 1/2 cups all-purpose flour
        <p>
            3 1/2 teaspoons baking powder
        <p> 
            1 teaspoon salt 
        <p>    
            1 tablespoon white sugar
        <p> 
            1 1/4 cups milk 
        <p>    
            1 egg
        <p>    
            3 tablespoons butter, melted
        </p>
          <span> </span>
        <h3>Directions</h3>
        <p>
            1. Heat oven to 400°F. Line 13x9-inch pan with foil; spray with cooking spray.
            
        <p>
            2. In large bowl, mix all ingredients. Shape mixture into 20 to 24 (1 1/2-inch) meatballs. Place 1 inch apart in pan.
        <p>
            3. Bake uncovered 18 to 22 minutes or until no longer pink in center.
        </p>
          <span> </span>
        <h3>Reviews</h3>
     <?php include '../Fragments/postReview.php' ?>  
    
      <?php include '../Fragments/loadReviews.php' ?>    
       
        
    </body>
</html>

