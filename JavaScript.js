function getReviews(table){
    $.getJSON("../../getReviews.php", "table=" + table, function(reviews){    
       console.log(reviews);
        reviews.forEach(function(review){
            $("#reviews").append("<div>"    
            + "<p class = username>" +
            "Reviewer: " + review.username +  
            "</p>" +
            review.review + 
            "</div>");
        });
    }
    );
}

function userGetReviews(table, sessionUsername){
    $.getJSON("../../getReviews.php", "table=" + table, function(reviews){    
        console.log(reviews);
        reviews.forEach(function(review){
            if (review.username === sessionUsername){
                $("#reviews").append("<div class = 'yellow'>"    
                + "<p class = username>" +
                "Reviewer: " + review.username +  
                "</p>" +
                review.review +  "<button type='button' onclick='deleteReview(\"" + table + "\" " + "," + "\""  + review.username + "\");'> Delete </button>" + 
                
                "</div>");
            }
            
            else{
                $("#reviews").append("<div>"    
                + "<p class = username>" +
                "Reviewer: " + review.username +  
                "</p>" +
                review.review + 
                "</div>");
            }
        });
    }
    );
}

function deleteReview(table, user) {
    $.getJSON("../../deleteReview.php", "table=" + table + "&username=" + user, function () {
        $( "div" ).remove( ".yellow" );
        }
    );
}

function setReview(){
    var recipe = $('[name=table]').val();
    var username = $('[name=username]').val();
    var review = $('[name=review]').val();
    $.getJSON("../../setComment.php", "recipe=" + recipe + "&username=" + username + "&review=" + review, function(){    
        $("#reviews").append("<div class = 'yellow'>"    
                + "<p class = username>" +
                "Reviewer: " + username +  
                "</p>" +
                review +  "<button type='button' onclick='deleteReview(\"" + recipe + "\" " + "," + "\""  + username + "\");'> Delete </button>" + 
                
                "</div>");
    }
    );
}

