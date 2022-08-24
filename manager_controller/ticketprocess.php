<?php
include("../manager_controller/reg.php");
include("../manager_controller/cookie.php");  
// include("../manager_controller/sessioncheck.php");  

$invalid_customer_name="";
$valid_customer_name="";

$invalid_hall="";
$valid_hall="";

// $hall = $_POST["hall"];
$invalid_clock ="";
$valid_clock="";


if(isset($_REQUEST["submit"])){
   
{

if(empty($_POST["customer_name"])  || is_numeric($_POST["customer_name"]))
{
    $invalid_customer_name="Enter customers Name";
}
else
{
    $valid_customer_name= $_POST["customer_name"];
    //$validfname = $Seller_fname;
    echo "Customers Name : " .$valid_customer_name;
}
echo"<br>";

echo"Ticket No : ";
echo(rand(100,300));
echo"<br>";


if(isset($_POST["movie"]))
{
    echo"Movie Name : " . $_POST["movie"];
    echo"<br>";
}
else
{
    echo"Please select a Movie<br>";
}

$_POST["clock"] = isset($_POST['clock']) ? "Movie Time : " . $_POST["clock"] : "Select Movie Time";
echo $_POST["clock"];

echo"<br>";

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














}
}
?>