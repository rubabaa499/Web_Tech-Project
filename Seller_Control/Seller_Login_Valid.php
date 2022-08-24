<?php
include("../sellerModel/db.php");
//include("Seller_Reg_Validation.php");



 session_start();
 setcookie("usercheck","visited",time()+86400);
if(isset($_COOKIE["usercheck"])){
    echo "you have visited us<br>";
}
else{
    echo "Welcome to our site<br>";
}

// $_SESSION['Seller_name'] = 'Dear Seller';
 

 
if(isset($_POST["submit"])){
    if(empty($_POST["Seller_name"]) || empty($_POST["Seller_pass"])){
        echo "User name and Pass cannot be empty<br>";
    }
    else{
        $mydb=new db();
        $conobj=$mydb->opencon();
        $results=$mydb->checklogin($conobj,"seller_reg",$_POST["Seller_name"],$_POST["Seller_pass"]);
        if($results->num_rows>0){
            $_SESSION["Seller_name"]=$_POST["Seller_name"];
            $_SESSION["Seller_pass"]=$_POST["Seller_pass"];
        }
        else{
            echo "user not found";
        }

    }
    if(!empty($_SESSION["Seller_name"]) && !empty($_SESSION["Seller_pass"])){
        header("Location: ../Seller_View/Seller.php");
    }
}




















 
    // if(isset($_REQUEST['submit']))
    // {
     
    //     $Seller_name = $_REQUEST["Seller_name"];
    //     $Seller_pass = $_REQUEST["Seller_pass"];

    // if(empty($Seller_name))
    // {
    //     $invalid_sellername="Please Enter your Name";
    // }
    // else{
    //     $valid_sellername = $Seller_name;
    // //    echo "Name : " . $seller_name;
    // //    echo"<br>";

    // }
    
    // if(empty( $Seller_pass))
    // {
    //     $invalid_sellerpass ="Please Enter your Password";
    // }
    // else if (!empty( $Seller_pass) && strlen( $Seller_pass) >= 6)
    // {
    //     header("location:../Seller_View/Seller.php");
    //  $valid_sellerpass= $Seller_pass;
    // }
    // else
    // {
    //     $invalid_sellerpass="Password Invalid";
    // }



     //login using json
    //  $login_data=file_get_contents("../DataSeller/DataSeller.json");
    //  $fetch_login_data=json_decode($login_data);
   
    //  foreach($fetch_login_data as $log_data)
    // {
    //      if($log_data=="Seller_name" && $value==$valid_sellername)
    //      {
    //          if($log_data=="Seller_pass" && $value==$valid_sellerpass)
    //          {
    //              echo"Login success";
    //              //header("location:../Seller_View/Seller.php");
    //          }
    //          else
    //          {
    //              echo"LOgin failed";
    //          }
    //      }
         
         
         
    //  }

    
    
 

?>