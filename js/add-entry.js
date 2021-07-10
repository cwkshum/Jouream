var titleEntered = false;
var dateEntered = false;
var hoursEntered = false;
var minutesEntered = false;
var ratingEntered = false;
var descriptionEntered = false;
var tagsEntered = false;
var visibilityEntered = false;

// get the popoup
var popup = document.getElementById("popup");

var title = ""
var date = ""; 
var hours = "";
var minutes = "";
var rating = "";
var description = "";
var tags = "";
var visibility = "";

// title validation
$("#title").blur(function(){
    title = $(this).val();

    // if the title input is empty, dont show a message
    if(title == ""){
        $("#title-taken").fadeOut();
    } else {
        $.ajax({
            url: 'add-entry-post.php',
            type: 'POST',
            data: {title: title, publish: 0},
            success: function(data){
                // parse the data sent back from the PHP 
                var result = $.parseJSON(data);
                var string ='';

                // if there is more than result, provide a message that tells the user the title is already in use
                if (result == 1) {
                    string += 'This entry title already exists.';
                    titleEntered = false;
                } else{
                    titleEntered = true;
                }
                // Show response
                $("#title-taken").fadeIn().html(string);
                enablePublish();
            }
        });
    }
});

// $(document).ready(function(){
//     window.alert("hi");
// });

// date input validation
$("#date").change(function(){
    date = document.getElementById('date').value;
    if(date != ''){
        dateEntered = true;
    } else{
        dateEntered = false;
    }
    enablePublish();
});

// hours input validation
$("#hours").blur(function(){
    hours = document.getElementById('hours').value;

    if(hours != ''){ 
        if(hours > 24 && hours < 0){
            hoursEntered = false;
        } else {
            hoursEntered = true;
        }
    } else{
        hoursEntered = false;
    }
    enablePublish();
});

// minutes input validation
$("#minutes").blur(function(){
    minutes = document.getElementById('minutes').value;

    if(minutes != ''){ 
        if(minutes > 59 && minutes < 0){
            // minutes input is not valid
            minutesEntered = false;
        } else {
            if(hours == 0 && minutes == 0){
                // hours and minutes input combination is not valid
                minutesEntered = false;
            } else if(hours == 24 && minutes != 0){
                // hours and minutes input combination is not valid
                minutesEntered = false;
            } else{
                minutesEntered = true;
            }
        }
    } else{
        minutesEntered = false;
    }

    enablePublish();
});

// rating selection validation
$('.rating').click(function(){
    rating = $(this).val();
    if(rating != ''){
        ratingEntered = true;
    } else{
        ratingEntered = false;
    }

    enablePublish();
});

// description input validation
$("#description").blur(function(){
    description = document.getElementById('description').value;

    if(description != ''){ 
        descriptionEntered = true;
    } else{
        descriptionEntered = false;
    }

    enablePublish();
});

// tags input validation
$("#add-tags").blur(function(){

    tags = "";

    $('.tag').each(function(){
        if(tags == ""){
            // https://stackoverflow.com/questions/11347779/jquery-exclude-children-from-text
            tags += $(this).clone().find('a').remove().end().text();
        } else{
            tags += "," + $(this).clone().find('a').remove().end().text();
        }
    });

    if(tags != ""){
        tagsEntered = true;
    } else{
        tagsEntered = false;
    }

    enablePublish();
});

// visibility selection validation
$('.visibility').click(function(){
    visibility = $(this).val();
    if(visibility != ''){
        visibilityEntered = true;
    } else{
        visibilityEntered = false;
    }
    enablePublish();
});

// enable submit button check
function enablePublish(){
    if(titleEntered && dateEntered && hoursEntered && minutesEntered && ratingEntered && descriptionEntered && tagsEntered && visibilityEntered){
        document.getElementById("publish").disabled = false;
    } else{
        document.getElementById("publish").disabled = true;
    }

    if(titleEntered || dateEntered || hoursEntered || minutesEntered || ratingEntered || descriptionEntered || tagsEntered || visibilityEntered){
        document.getElementById("draft").disabled = false;
    } else{
        document.getElementById("draft").disabled = true;
    }
}

// add entry to database
$(document).on('click', '#publish', function(){

    window.alert("publish");

    $.ajax({
        url: "add-entry-post.php",
        method: "POST", 
        data: {title: title, date: date, hours: hours, minutes: minutes, rating: rating, description, description, tags:tags, visibility:visibility, publish: 1},

        success:function(data){
            // parse the data
            window.alert(data);
            var result = $.parseJSON(data);

            if(result){
                popup.style.display = "none";
            } 
        },
    });
});

// add draft entry to database
$(document).on('click', '#draft', function(){

    $.ajax({
        url: "add-entry-post.php",
        method: "POST", 
        data: {title: title, date: date, hours: hours, minutes: minutes, rating: rating, description, description, tags:tags, visibility:visibility, publish: 2},

        success:function(data){
            window.alert(data);

            // parse the data
            var result = $.parseJSON(data);

            if(result){
                popup.style.display = "none";
            } 
        },
    });
});