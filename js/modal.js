// When the user clicks the button, open the modal 
function modalOpen() {
  document.getElementById("myModal").style.display = "block";
}

// When the user clicks on <span> (x), close the modal
function modalClose() {
  document.getElementById("myModal").style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == document.getElementById("myModal")) {
    document.getElementById("myModal").style.display = "none";
  }
}