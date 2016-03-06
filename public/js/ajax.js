$("#newsletter").on('click', function(){
    //event.preventDefault();
    
    var newsletterEmail = $("#newsletter_email").val();
    if(newsletterEmail != ""){
        addEmailToList(newsletterEmail);
    }
    
});

function addEmailToList(email){
    
    $.ajax({
        type: 'post'
    });
}