$(document).on('click', '.login', function(){
    var email = $("#email").val();
    var password = $("#password").val();

    $.ajax({
        url: "login-post.php",
        method: "POST", 
        data: {email: email, password: password},

        success:function(data){
            // parse the data
            var result = $.parseJSON(data);

            if(result == ''){
                // show error message
                window.alert("incorrect email/password");
            } else{
                // user logged in successfully, redirect to account page
                window.location.replace("account.php");
            }
        },
    });
});