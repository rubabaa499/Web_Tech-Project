function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  xmlhttp.open("GET", "../Admin_control/gethint.php?q=" + str);
  xmlhttp.send();
  }
}