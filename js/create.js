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

function clearEntries(){
  
  document.getElementById('title').value = '';
  document.getElementById('date').value = '';
  document.getElementById('hours').value = '';
  document.getElementById('minutes').value = '';
  document.getElementById('description').value = '';
  document.getElementById('add-tags').value = '';
  // $('input[name="rating"]').attr('checked', false);
  // $('input[name="visibility"]').attr('checked', false);
  // $('input[name="visibility"]').attr('checked', false);

  // $('#private').removeAttr('checked');
  // $('#public').removeAttr('checked');
  // $(':radio').removeAttr('checked');
  // $('input[name="visibility"]').attr('checked', false);

  // if($('input[name="visibility"]').is(':checked')) { window.alert("private is checked"); } else{ window.alert("private is not checked");}
}