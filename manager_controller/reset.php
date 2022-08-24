<?php
include("../Model/db.php");

$invalid_managername="";
$svalid_managername="";
$invalidpass="";
$validpass="";
$invalidcf="";
$validcf="";
$x=0;
$pass_reg = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
if(isset($_REQUEST["save_pass"])){
    $pass=$_REQUEST['mn_new_pass'];
    $cf=$_REQUEST['con_pass'];
    $manager_name=$_REQUEST["mn_name"];

    if(empty($_REQUEST['mn_name'])){
        $invalid_managername="Please enter your manager_name";
    }
    else{
        $valid_managername=$manager_name;
        $x++;
    };
    
    if(empty($pass)){
      $invalidpass="Please Enter a Valid Password";
      echo "<br>";
  }
  else{
     
      if(strlen($pass)>=8 && preg_match($pass_reg,$pass)){
          echo "Passwored Entered<br>";
          $validpass=$pass;
          $x++;
      }
      else{
          $invalidpass="Password is not valid!";
          echo "<br>";
      }
      echo "<br>";
    }

      if(empty($cf)){
        $invalidcf="Please Confirm Password";
        echo "<br>";
    }
    else{
        if($cf==$pass){
    
            $validcf=$cf;
            $x++;
            echo "Confirm Password Entered<br>";
        }
        else{
            $invalidcf="Password not matched try again!";
            echo "<br>";
           
        }
    }
    

    $mydb=new db();
    $conobj=$mydb->opencon();
    
    //forget password
    if($x==3){
        $con=$mydb->Updateprofile($conobj,"manager_registration",$manager_name,$pass,$cf);
        echo "Profile updated";
    }
    else{
        echo "Profile not updated";
    }
}
    
    
      

  


    
?>