<?php
include("../Admin_Model/sellerdb.php");


if(isset($_REQUEST["sub"])){
    $Seller_fname = $_POST["fname"];
    $Seller_lname = $_POST["lname"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $myfile=$_FILES["myfile"]["name"];
    $Seller_name =$_POST["Seller_name"];
    $Seller_pass =$_POST["Seller_pass"];
    $Seller_ConSellerpass =$_POST["Confirm_seller_pass"];
    $mydb=new sellerdb();
    $conn=$mydb->opencon();
    $mydb->insertseller($Seller_fname,$Seller_lname,$_POST["gender"],$address,$email,$myfile,$Seller_name,$Seller_pass,$Seller_ConSellerpass,"seller_reg",$conn);

  
}
?>

