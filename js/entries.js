var search = $("#search").val();
var sort = $("#sort").val();
var tags = $("#tags").val();

$(document).ready(function(){
    // searchEntries();
    // filterEntries();
    displayEntries();

});

function displayEntries(){
    $.ajax({
        url:"filter-entries.php",
        method:"POST",
        data:{search:search, tags:tags, sort:sort},

        success:function(data){
            // parse the result
            var result = $.parseJSON(data);
            // window.alert(result);

            var string = '';

            if(result == ''){
                string += "<p>Oops! It appears there are no entries found!</p>";
            }

            // display entries
            $.each(result, function(key, value){



            });


            // Show the results on the page
            $("#entries").html(string);

        }
    })
}

// search filter
function searchFilter(){
    search = $("#search").val();
    displayEntries();
}

// sort filter
function sortFilter(){
    sort = $("#sort").val();
    displayEntries();
}

// tags filter
$("#tags").blur(function(){
    tags = $("#tags").val();
    displayEntries();
});

