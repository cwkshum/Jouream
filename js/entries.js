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

                string += '<div class="entry-card">';
                    string += '<p id="' + value['entry_id'] + '" onclick="deleteEntry(this.id)">delete</p>';
                    string += '<p>edit</p>';
                    // string += '<p>make public</p>';

                    // Entry Title
                    string += '<h3 class="entry-card-title">' + value['title'] + '</h3>';

                    // Entry Date 
                    var monthNames = ["January", "February", "March", "April", "May", "June",
                                "July", "August", "September", "October", "November", "December"];
                    var date = value['date'].split('-');
                    string += '<p class="entry-card-date">' + monthNames[date[1]-1] + ' ' +  date[2] + ', ' + date[0] + '</p>';

                    // Entry Content
                    string += '<p>' + value['content'].substr(0, 50);
                    if(value['content'].length > 50){
                        string += '...';
                    } 
                    string += '</p>';

                    // Entry Tags
                    var tagArr = value['tags'].split(',');
                    if(tagArr.length > 2){
                        for(let i = 0; i < 2; i++){
                            string += '<p class="entry-card-link tags">#' + tagArr[i] + ' </p>';
                        }
                        string += '<p class="entry-card-link">#...</p>';
                    } else{
                        for(let i = 0; i < tagArr.length; i++){
                            string += '<p class="entry-card-link tags">#' + tagArr[i] + ' </p>';
                        }
                    }

                    // Entry Link
                    string += '</a><hr class="entry-card-line"><div class="cont-reading"><p id="' + value['entry_id'] + '" class="entry-card-link" onclick="contReading(this.id)">';

                    // Continue Reading
                    string += 'continue reading <img src="img/right-arrow.svg" alt="right arrow icon"></p></div>';

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
    tags = "";
    displayEntries();
}

// sort filter
function sortFilter(){
    sort = $("#sort").val();
    tags = "";
    displayEntries();
}

// tags selected from an entry
$(document).on('click', '.tags', function(){
    tags = $(this).text().replace('#', '');
    tags = tags.replace(' ', '');
    $('#search').val(tags);
    displayEntries();
});

function contReading(id){
    var entry_id = id;

    $.ajax({
        url:"save-entry-info.php",
        method:"POST",
        data:{entry_id:entry_id,fromEntries:true},

        success:function(data){
            // parse the result
            var result = $.parseJSON(data);

            if(result == 1){
                window.location.replace("entry.php");
            }

        }
    })
}

function deleteEntry(id){
    var entry_id = id;

    $.ajax({
        url:"delete-entry.php",
        method:"POST",
        data:{entry_id:entry_id},

        success:function(data){
            // parse the result
            var result = $.parseJSON(data);

            if(result == 1){
                displayEntries();
            }

        }
    })
}




// get the popoup
var popup = document.getElementById("popup");

// retrieve the button that opens the popup
var button = document.getElementById("create-post");

// retrieve <span> element that closes the popup
var span = document.getElementsByClassName("close")[0];

// when the user clicks the button open the popup
button.onclick = function() {
  popup.style.display = "block";
}

// when the user clicks "x" close the popup
span.onclick = function() {
  popup.style.display = "none";
  clearEntries();
}

// when the user clicks outside of the popup, close it
window.onclick = function(event) {
  if (event.target == popup) {
    popup.style.display = "none";
    clearEntries();
  }
}

// clear the popup fields
function clearEntries(){
  // remove content from text fields
  document.getElementById('title').value = '';
  document.getElementById('date').value = '';
  document.getElementById('hours').value = '';
  document.getElementById('minutes').value = '';
  document.getElementById('description').value = '';
  document.getElementById('add-tags').value = '';

  // unselect rating and visibility options
  $('#entry-rating').find("input[type=radio]").prop("checked", "").end();
  $('#entry-visibility').find("input[type=radio]").prop("checked", "").end();

  // remove entered tags
  $('.tag').remove();
}