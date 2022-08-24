<?php
session_start();

// include("../sellerModel/db.php");
// $Seller_nameN=$_SESSION["Seller_name"];




$mydb= new db();
$connobj=$mydb->opencon();

// $results=$mydb->SearchuserbySellername($connobj,"seller_reg",$Seller_nameN);
if($results->num_rows>0){
    while($myrow=$results->fetch_assoc())
    {
       // $id=$myrow["id"];
       $Seller_username=$myrow["Seller_name"];
       $Seller_pass=$myrow["Seller_password"];
       $Seller_ConSellerpass =$myrow["Seller_Conpassword"];
    }
}
if(isset($_POST["update"])){
$mydb= new db();
$connobj=$mydb->opencon();
$results=$mydb->Updateprofile($connobj,"seller_reg",$_POST["Seller_name"],$_POST["Seller_pass"],$_POST["Seller_ConSellerpass"]);

if($results===TRUE){
    echo "Updated";
}
else{
    echo "can't update".$connobj->error;
}
}




?>