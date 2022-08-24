<?php
class managerdb{
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
 function insertmanager($fname,$lname,$age,$gender,$email,$man_name,$password,$con_password,$table,$conn){
        
        $sqlstr="INSERT into $table(fname,lname,age,gender,email,username,password,confirm_password) VALUES ('$fname','$lname','$age','$gender','$email','$man_name','$password','$con_password')";
        if($conn->query($sqlstr)){
           
            echo "Inserted";
        }
        else{
            echo "cannot insert Because of the error =".$conn->error;//error debug using this property
        }
            }
       function update($conn,$table,$email,$pass,$cpass){
              $sqlstr="UPDATE $table SET password='$pass',confirm_password='$cpass' WHERE email='$email'";
              if($conn->query($sqlstr)){
                echo "Updated";
              }
              else{
                echo "cannot update Because of the error =".$conn->error;//error debug using this property
              }
       }
       function deleteuser($email,$table,$conn){
               
        $sqlstr="DELETE FROM $table WHERE email='$email'";
        $res= $conn->query($sqlstr);
        
        if($res==true){
            echo "Record deleted successfully";
        }
        
    }
    }