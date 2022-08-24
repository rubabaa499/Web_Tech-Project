function loadDoc() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("show").innerHTML =
      this.responseText;
    }
    xhttp.open("GET", "../user_view/contributor.php");
    xhttp.send();
  }