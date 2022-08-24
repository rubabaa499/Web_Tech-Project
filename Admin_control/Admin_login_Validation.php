<?php
include("../Admin_Model/db.php");
session_start();

$validadmin="";
$invalidadmin="";
$validpass="";
$invalidpass="";
$x=0;

 
   
$pass_regex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
if(isset($_REQUEST["Submission"])){
    $admin_name=$_REQUEST["admin_name"];
    $password=$_REQUEST["admin_pass"];
    if(empty($admin_name)){
        $invalidadmin="You must enter your name!";
        echo "<br>";	
    }
    else{
        $validadmin=$admin_name;
        $x++;
      
    }

    if(empty($password)){
        $invalidpass="Please Enter a Valid Password";
        echo "<br>";
    }
    else{
       
        if(strlen($password)>=5 && preg_match($pass_regex,$password)){
            // echo "Password Entered<br>";
            $validpass=$password;
            $x++;
        }
        else{
            $invalidpass="Password is not valid!";
            echo "<br>";
        }
    }

   


   if(empty($_REQUEST["admin_name"])|| empty($_REQUEST["admin_pass"])){
    $invaliderror= "Admin name and Password cannot be empty";

   }
   else{
    //remember me
 if(isset($_REQUEST["Remember_me"])){
    setcookie("admin_name",$_REQUEST["admin_name"],time()+86400);
    setcookie("admin_pass",$_REQUEST["admin_pass"],time()+86400);
   
}
else{
    setcookie("admin_name","",time()-86400);
    setcookie("admin_pass","",time()-86400);
}
    if($x==2){
    $mydb=new db();
    $conobj=$mydb->opencon();
    $results=$mydb->checklogin($conobj,"admin_registration",$admin_name,$password);
    if($results->num_rows>0){
        $_SESSION["admin_name"]=$_REQUEST["admin_name"];
        $_SESSION["admin_pass"]=$_REQUEST["admin_pass"];

    }
}
    else{
        echo "Admin not found<br>";
    }
   }
  

    // if(empty($admin_name)){
    //     $invalid_adminname="Please Enter your Admin name";
    // }
    // else{
    //     $valid_adminname=$admin_name;
    // }

    // if(empty($password)){
    //     $invalid_password="Please Enter your Password";
    // }
    // else if(!empty($password) && strlen($password)<8){
        
    //     $invalid_password="Password must Contains at least 8 characters";
    //         echo "<br>";
        
            
    //     }
    // else{
    //     $validpass=$password;
          
            
          
    // }



//login using json
// $login_data=file_get_contents("../Admin_Data/admin_data.json");
// $login=json_decode($login_data);

// foreach($login as $login_data){
   
//         if($login_data->Admin_Name==$valid_adminname && $login_data->Password==$validpass){
            
          
           
//             $_SESSION['admin_name'] = $valid_adminname;
//             $_SESSION['admin_pass'] = $validpass;
//             header("Location:../Admin_View/Admin_HomePage.php");
//         } 
//         else{
//             if(empty($admin_name))
//             {
//                 $invalid_adminname= "You must enter Admin Name";
//             }
//            else
//            {
//             $invalid_adminname= "Invalid Admin Name or password";
//            }
        
//         } 
// }





        }
    
   




?>