<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../sellerCSS/notice.css">
</head>
<body>

<h2 id="notice">Seller Notice Board</h2>

<!-- HTML !-->
<!-- <button type="button" class="button-57" role="button" onclick="loadDoc()"><span class="text">Button 57</span><span>Urgent</span></button> -->
<!-- <button  >Notice Board</button> -->




<!-- HTML !-->
<div id="demo">
<button type="button" class="button-53" role="button" onclick="loadDoc()">SELLER NOTICE</button>
</div>


<div id="demo1">
<button type="button" class="button-54" role="button" onclick="loadDoc1()">Urgent NOTICE</button>
</div>


<div id="demo2">
<button type="button" class="button-55" role="button" onclick="loadDoc2()">Meeting NOTICE</button>
</div>



<h3><a href="Seller.php">Back to HomePage</a></h3>



<script>
function loadDoc() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("demo").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "Notice.php");
  xhttp.send();
}
</script>

<script>
function loadDoc1() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("demo1").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "Notice1.php");
  xhttp.send();
}
</script>
<script>
function loadDoc2() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("demo2").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "Notice2.php");
  xhttp.send();
}
</script>
</body>
</html>