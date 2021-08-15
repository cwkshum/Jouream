var search = $("#search").val();
var sort = $("#sort").val();
var tags = "";

$(document).ready(function(){
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

            var string = '';

            if(result == ''){
                string += "<p>Oops! It appears there are no entries found!</p>";
            }

            // display entries
            $.each(result, function(key, value){

                // Remove spaces in the product name
                // var stripped = value['name'].trim(); 
                // stripped = stripped.replace(/\s+/g, '');

                string += '<div class="entry-card">';
                    // Entry Title
                    string += '<h3 class="entry-card-title">' + value['title'] + '</h3>';

                    // Entry Date 
                    var monthNames = ["January", "February", "March", "April", "May", "June",
                                "July", "August", "September", "October", "November", "December"];
                    var date = value['date'].split('-');
                    string += '<p class="entry-card-date">' + monthNames[date[1]-1] + ' ' +  date[2] + ', ' + date[0] + '</p>';

                    // Entry Content
                    string += '<p>' + value['content'] + '</p>';

                    // Entry Tags
                    var tagArr = value['tags'].split(',');
                    for(let i = 0; i < tagArr.length; i++){
                        string += '<a href="" class="entry-card-link">#' + tagArr[i] + ' </a>';
                    }

                    // Entry Link
                    string += '</a><hr class="entry-card-line"><div class="cont-reading"><a href="" class="entry-card-link"></a>';

                    // Continue Reading
                    string += 'continue reading <img src="img/right-arrow.svg" alt="right arrow icon"></a></div>';

                string += '</div>';

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

    displayEntries();
});

