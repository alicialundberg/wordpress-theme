/* Show/hide text info-circles */
function showText(e) {
    var x = document.getElementsByClassName("more-info")[e];
    if (x.style.display === "none" || x.style.display == '') {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
  
  /* Go back button */
  function goBack() {
    window.history.back();
  }
  