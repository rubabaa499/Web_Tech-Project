<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login For Manager</title>
    <link rel="stylesheet" href="../managercss/style.css">

</head>
<body>
<div class="header">
        <h1 align="center">Search and see employee</h1>
        
<h3>Start typing a name in the input field below:</h3>
</div>


<p>Suggestions: <span id="txtHint"></span></p> 
<p>First name: <input type="text" id="txt1" onkeyup="showHint(this.value)"></p>

<script>
function showHint(str) {
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "ajphp.php?q="+str);
  xhttp.send();   
}
</script>

</body>
</html>
