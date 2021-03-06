var firstNameValid = false;
var lastNameValid = false;
var emailValid = false;
var passwordValid = false;

// email validation
$("#email").blur(function(){
    var email = $(this).val();
    emailValidation(email);

    // if the email input is empty, dont show a message
    if(email == ""){
        $("#email-taken").fadeOut();
    } else {
        $.ajax({
            url: 'sign-up-post.php',
            type: 'POST',
            data: {email: email, submit: 0},
            success: function(data){
                //parse the data sent back from the PHP 
                var result = $.parseJSON(data);
                var string ='';

                //if there is more than result, provide a message that tells the user the email is already in use
                if (result == 1) {
                    string += 'This email is already in use.';
                    emailValid = false;
                } else{
                    emailValid = true;
                }
                // Show response
                $("#email-taken").fadeIn().html(string);
                enableSubmit();
            }
        });
    }
});

// first name validation
$("#first-name").blur(function(){
    var firstName = document.getElementById('first-name').value;
    var invalid = /^[a-zA-Z\s]+$/;

    if (firstName != ''){ 
        if (invalid.test(firstName) === false){
            // if the input in the first name box has invalid characters, display a message
            document.getElementById('first-name-validation').style.color = '#9c4b49';
            document.getElementById('first-name-validation').innerHTML = 'Only letters and white space allowed!';
            firstNameValid = false;
        } else {
            //if the name has been entered properly, don't display a message 
            document.getElementById('first-name-validation').style.color = 'white';
            document.getElementById('first-name-validation').innerHTML = '';
            firstNameValid = true;
        }
    } else{
        document.getElementById('first-name-validation').style.color = 'white';
        document.getElementById('first-name-validation').innerHTML = '';
        firstNameValid = false;
    }
    enableSubmit();
});

// last name validation
$("#last-name").blur(function(){
    var lastName = document.getElementById('last-name').value;
    var invalid = /^[a-zA-Z\s]+$/;

    if (lastName != ''){ 
        if (invalid.test(lastName)  === false){
            // if the input in the last name box has invalid characters, display a message
            document.getElementById('last-name-validation').style.color = '#9c4b49';
            document.getElementById('last-name-validation').innerHTML = 'Only letters and white space allowed!';
            lastNameValid = false;
        } else {
            //if the name has been entered properly, don't display a message
            document.getElementById('last-name-validation').style.color = 'white';
            document.getElementById('last-name-validation').innerHTML = '';
            lastNameValid = true;
        }
    } else{
        document.getElementById('last-name-validation').style.color = 'white';
        document.getElementById('last-name-validation').innerHTML = '';
        lastNameValid = false;
    }
    enableSubmit();
});

// check email for invalid characters
function emailValidation(email){
    var invalid = /^\S+@\S+\.\S+$/;

    if (email != ''){ 
        if (invalid.test(email)  === false){
            // if the input in the email box has invalid characters, display a message
            document.getElementById('email-validation').style.color = '#9c4b49';
            document.getElementById('email-validation').innerHTML = 'Pleae use a valid email!';
        } else {
            // if the name has been entered properly, don't display a message
            document.getElementById('email-validation').style.color = 'white';
            document.getElementById('email-validation').innerHTML = '';
        }
    } else{
        document.getElementById('email-validation').style.color = 'white';
        document.getElementById('email-validation').innerHTML = '';
    }
}

// password validation
function passwordCheck(){
    if((document.getElementById('password').value) != '' && (document.getElementById('confirm-password').value) != ''){    
        //if the passwords matching show 'Matching'
        if (document.getElementById('password').value == document.getElementById('confirm-password').value) {
            document.getElementById('password-message').style.color = 'green';
            document.getElementById('password-message').innerHTML = 'Passwords Matching';
            passwordValid = true;
        } else {
            //if the passwords don't match, show 'Passwords Not matching'
            document.getElementById('password-message').style.color = '#9c4b49';
            document.getElementById('password-message').innerHTML = 'Passwords Not Matching';
            passwordValid = false;
        }
    } else{
        //if no passwords have been entered, don't show a message
        document.getElementById('password-message').style.color = 'white';
        document.getElementById('password-message').innerHTML = '';
        passwordValid = false;
    }
    enableSubmit();
}

// enable submit button check
function enableSubmit(){
    if(firstNameValid && lastNameValid && emailValid && passwordValid){
        document.getElementById("sign-up").disabled = false;
    } else{
        document.getElementById("sign-up").disabled = true;
    }
}

// add sign up information to database
$(document).on('click', '#sign-up', function(){
    var firstName = $("#first-name").val();
    var lastName = $("#last-name").val();
    var email = $("#email").val();
    var password = $("#password").val();

    $.ajax({
        url: "sign-up-post.php",
        method: "POST", 
        data: {firstName: firstName, lastName: lastName, email: email, password: password, submit: 1},

        success:function(data){
            // parse the data
            var result = $.parseJSON(data);

            if(result){
                // user logged in successfully, redirect to account page
                window.location.replace("account.php");
            } 
        },
    });
});