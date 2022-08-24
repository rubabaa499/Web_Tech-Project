<?php

include ("../user_model/db.php");

if(!isset($_SESSION))
{
    session_start();
}

$invalid_username="";
$invalid_password="";
$valid_username="";
$valid_password="";
$x=0;

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(isset($_REQUEST['submit']))
        {
            $username=$_REQUEST["email"];
            $password=$_REQUEST["password"];
    
            if(empty($username))
            {
                $invalid_username= "*you must enter email";
            }
            else
            {
               $valid_username=$username;
                $x++;
            }
            if(empty($password))
            {
                $invalid_password= "*you must enter password";
            }
            
            else if(!empty($password) && strlen($password)<8)
            {
                $invalid_password= "*your password must be 8 characters";
            }
            else
            {
                $valid_password=$password;
                $x++;
            }
           
        }

     if($x==2)
     {
       $mydb=new db();
       $conn=$mydb->opencon();

        $login=$mydb->login($conn,"reg",$valid_username,$valid_password);
        if($login->num_rows>0)
        {
            $_SESSION['username']=$valid_username;
            header("location:../user_view/homepage.php");
        }
        else
        {
            $invalid_username="*invalid username or password";
        }
     }

    }
      
?>