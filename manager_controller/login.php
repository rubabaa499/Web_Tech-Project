<?php
include("../Model/db.php");
session_start();

$validmanager="";
$invalidmanager="";
$validpass="";
$invalidpass="";

 
   

if(isset($_REQUEST["Submission"])){
    $manager_name=$_REQUEST["manager_name"];
    $password=$_REQUEST["manager_pass"];

   

    


  


   

   if(empty($_REQUEST["manager_name"])|| empty($_REQUEST["manager_pass"])){
    echo "Manager name and Password cannot be empty";

   }
   else{
    //remember me
 if(isset($_REQUEST["Remember_me"])){
    setcookie("manager_name",$_REQUEST["manager_name"],time()+86400);
    setcookie("manager_pass",$_REQUEST["manager_pass"],time()+86400);
   
}
else{
    setcookie("manager_name","",time()-86400);
    setcookie("manager_pass","",time()-86400);
}
    
    $mydb=new db();
    $conobj=$mydb->opencon();
    $results=$mydb->checklogin($conobj,"manager_registration",$manager_name,$password);
    if($results->num_rows>0){
        $_SESSION["manager_name"]=$_REQUEST["manager_name"];
        $_SESSION["manager_pass"]=$_REQUEST["manager_pass"];

    }
    else{
        echo "Manager not found<br>";
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