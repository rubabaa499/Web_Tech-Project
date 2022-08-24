<?php
class db{
    function opencon(){
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="web_project";
        //create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//connection check
if($conn->connect_error){
    echo "error connecting database";
}
return $conn;
    }
    function insertmanager($fname,$lname,$age,$gender,$mob,$email,$file_upload,$manager_name,$password,$confirm_password,$table,$conn){

        $sqlstr="INSERT into $table(fname,lname,age,gender,num,email,file_upload,username,password,confirm_password) VALUES ('$fname','$lname','$age','$gender','$mob','$email','$file_upload','$manager_name','$password','$confirm_password')";
        if($conn->query($sqlstr)){
            echo "data is being inserted";
        }
        else{
            echo "can't insert".$conn->error;//error debug using this property
        }
    }
        
        function checklogin($conn,$tablename,$manager_name,$password){
            $sqlstr="SELECT manager_name,Password FROM $tablename WHERE manager_name='$manager_name' AND Password='$password'";
            return $conn->query($sqlstr);
    
        }
        function Updateprofile($conn,$tablename,$manager_name,$password,$confirm_password){
        
            $sqlstr="UPDATE $tablename SET manager_name='$manager_name',password='$password',confirm_password='$confirm_password'  WHERE manager_name='$manager_name'";
            return $conn->query($sqlstr);
            
    
        }
       
       
        function connclose($conn){
            return $conn->close();
        }
        


    }    
        



?>