<?php

include("../user_model/db.php");

$invalid_email="";
$valid_email="";
$invalid_newpass="";
$valid_newpass="";
$invalid_confirm="";
$valid_confirm="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    

    if(empty($_REQUEST['pass_user_name'])){
        $invalid_email="Please enter your email";
    }
    else
    {
        $valid_email=$_REQUEST['pass_user_name'];
    }

    if(empty($_REQUEST['pass_new_pass'])){
        $invalid_newpass="*Insert new password";
    }
    else if(!empty($_REQUEST['pass_new_pass']) && strlen($_REQUEST['pass_new_pass'])<8){
        $invalid_newpass="*Password must be atleast 8 characters";
    }
    else
    {
        $valid_newpass=$_REQUEST['pass_new_pass'];
    }

    if(empty($_REQUEST['pass_confirm'])){
        $invalid_confirm="*Confirm your password";
    }
    else if(!empty($_REQUEST['pass_confirm']) && $_REQUEST['pass_new_pass']!=$_REQUEST['pass_confirm']){
        $invalid_confirm="*Password does not match";
    }
    else
    {
        $valid_confirm=$_REQUEST['pass_confirm'];
    }
    
   //database update
   $passdb=new db();
   $conn=$passdb->opencon();

   $tablename="reg";
   $email=$valid_email;
   $set_pass=$valid_newpass;

   $check_email=$conn->query("SELECT email FROM $tablename WHERE email='$email'");

   if($check_email->num_rows>0)
   {
    if(!empty($valid_email) && !empty($valid_newpass) && !empty($valid_confirm)){
       
        $result=$passdb->updatepass($conn,$tablename,$email,$set_pass);
        if($result){
            echo "Password updated";
        }
        else{
            echo "Password not updated";
        }
    
   }
}
   else
   {
    $invalid_email="*Email does not exist";
   }
 

    }




?>