$(document).on('click', '.sign-up', function(){
    var firstName = $("#first-name").val();
    var lastName = $("#last-name").val();
    var email = $("#email").val();
    var confirmPassword = $("#confirm-password").val();
    var password = $("#password").val();

    $.ajax({
        url: "sign-up-post.php",
        method: "POST", 
        data: {firstName: firstName, lastName: lastName, email: email, password: password, confirmPassword: confirmPassword},

        success:function(data){
            // parse the data
            var result = $.parseJSON(data);

            if(result == ''){
                // show error message
                window.alert("sign up error");
            } else{
                // user logged in successfully, redirect to account page
                window.location.replace("account.php");
            }
        },
    });
});