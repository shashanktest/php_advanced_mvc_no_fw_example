$("#newsletter").on('click', function(){
    //event.preventDefault();
    
    var newsletterEmail = $("#newsletter_email").val();
    if(newsletterEmail != ""){
        addEmailToList(newsletterEmail);
    }
    
});

function addEmailToList(email){
    $.ajax({
        type: 'POST',
        url: '../library/AjaxListener.php',
        data: {
            controller: 'newsletter',
            action: 'add',
            dataToSend: {'email': email}
        },
        async: true,
        dataType: 'json',
        success: function(response){
            console.log(response);
            if(response == 1){
                $("#newsletter_email").val("");
            }
        },
        error: function(error){
            console.log(error);
            alert('try again');
        }
    });
}