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
 function insertadmin($fname,$lname,$age,$gender,$mob_no,$email,$file_upload,$admin_name,$password,$confirm_password,$table,$conn){

        
        $sqlstr="INSERT into $table(fname,lname,age,gender,mob_no,email,file_upload,admin_name,password,confirm_password) VALUES ('$fname','$lname','$age','$gender','$mob_no','$email','$file_upload','$admin_name','$password','$confirm_password')";
        if($conn->query($sqlstr)){
           
            header("Location:../Admin_View/Admin_Homepage.php");
        }
        else{
            echo "cannot insert Because of the error =".$conn->error;//error debug using this property
        }
            }
        

        function checklogin($conn,$tablename,$admin_name,$password){
            $sqlstr="SELECT admin_name,Password FROM $tablename WHERE admin_name='$admin_name' AND Password='$password'";
            return $conn->query($sqlstr);
    
        }
        function searchadmin($conn,$tablename,$adminname){
            $sqlstr="SELECT * FROM $tablename WHERE admin_name='$adminname'";
            return $conn->query($sqlstr);
        }
        function Updateprofile($conn,$tablename,$id,$password,$confirm_password){
       
            $sqlstr="UPDATE $tablename SET password='$password',confirm_password='$confirm_password'  WHERE id='$id'";
            return $conn->query($sqlstr);
        }
        //searchdata
        function showdata($conn,$tablename,$id){
            $sqlstr="SELECT * FROM $tablename WHERE id='$id'";
            return $conn->query($sqlstr);
        }
        
        

        


        

        


    }    
        



?>