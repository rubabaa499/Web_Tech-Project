<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/Home.css">
</head>
<body>
    
</body>
</html>

<?php

//session_start();
if(isset($_SESSION['seller_name'])) {
echo "Your session is running  " . $_SESSION['seller_name'];
echo"<br>";
}
//$cookie_name="Sell";
$value="Seller";
setcookie("myCookie", $value);

if(isset($_COOKIE["myCookie"])) {
    echo "<h3 class='wel'>Welcome</h3>";
  }else {  
    echo "<h3 class='wel'>Welcome to this page for the 1st time </h3>";  
}  

$invalid_customer_name="";
$valid_customer_name="";

$invalid_hall="";
$valid_hall="";

// $hall = $_POST["hall"];
$invalid_clock ="";
$valid_clock="";


if($_SERVER["REQUEST_METHOD"] =="POST")
{
$customer_name = $_POST["Customers_nam"];
// $hall = $_POST["hall"];
// $clock = $_POST["clock"];
// $movie =$_POST["movie"];

// $comment = $_POST["comment"];

if(empty($customer_name)  || is_numeric($customer_name))
{
    $invalid_customer_name="Enter customers Name";
}
else
{
    $_SESSION["Customers_nam"]=$_POST["Customers_nam"];
    // $valid_customer_name= $customer_name;
    //$validfname = $Seller_fname;
    // echo "Customers Name : " . $customer_name;
}
echo"<br>";

// $_SESSION["TicketNo"]=$_POST["TicketNo"];





$_SESSION["movie"] = $_POST["movie"];
if(isset($_POST["movie"]))
{
    echo"Movie Name : " . $_POST["movie"];
    echo"<br>";
}
else
{
    echo"Please select a Movie<br>";
}
$_SESSION["clock"] = $_POST["clock"];
$_POST["clock"] = isset($_POST['clock']) ? "Movie Time : " . $_POST["clock"] : "Select Movie Time";
echo $_POST["clock"];

echo"<br>";
$_SESSION["hall"] = $_POST["hall"];
if(isset($_POST["hall"]))
{
    // echo 'A radio button was selected.<br>';
    // $valid_hall= $hall;

    if ($_POST['hall']=== 'Hall X') {

        echo 'Hall Name : X<br>';

  
      }
      else if ($_POST['hall']=== 'Hall Z') {

        echo 'Hall Name : Y<br>';
  
      }
}
else
{
$invalid_hall= "<br>select radio a Button.";
}










echo"<br>";
//echo "Your Comment : " . $comment;



}
?>