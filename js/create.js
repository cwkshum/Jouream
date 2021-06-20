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
}

// when the user clicks outside of the popup, close it
window.onclick = function(event) {
  if (event.target == popup) {
    popup.style.display = "none";
  }
}