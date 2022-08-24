<?php
include("../Admin_Model/db.php");

$invalid_adminid="";
$valid_adminid="";
$invalidpass="";
$validpass="";
$invalidcf="";
$validcf="";

$x=0;
$pass_regex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/"; 
if(isset($_REQUEST["save_pass"])){
   $id=$_REQUEST["Ad_id"];
    $pass=$_REQUEST['ad_new_pass'];
    $cf=$_REQUEST['con_pass'];

    
    if(empty($id)){
        $invalid_adminid="Please Enter your Admin Id";
    }
    else{
        $valid_adminid=$id;
        $x++;

    }

    
    if(empty($pass)){
      $invalidpass="Please Enter a Valid Password";
      echo "<br>";
  }
  else{
     
      if(strlen($pass)>=5 && preg_match($pass_regex,$pass)){
         
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
        $invalidcf="Please Re-enter Password";
        echo "<br>";
    }
    else{
        if($cf==$pass){
    
            $validcf=$cf;
            $x++;
           
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
        $con=$mydb->Updateprofile($conobj,"admin_registration",$valid_adminid,$validpass,$validcf);
        echo "Password updated";
    }
    else{
        echo "Password not updated";
    }
}
    
    
      

  


    
?>