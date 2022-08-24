<?php
class userdb{
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
function insertuser($fname,$lname,$gender,$mob_no,$email,$address,$password,$table,$conn){

        
        $sqlstr="INSERT into $table(fname,lname,gender,mob,email,address,password) VALUES ('$fname','$lname','$gender','$mob_no','$email','$address','$password')";
        if($conn->query($sqlstr)){
           
            echo "Record inserted successfully";
        }
        else{
            echo "cannot insert Because of the error =".$conn->error;//error debug using this property
        }
            }
           
            function showdata($conn,$tablename,$email){
                $sqlstr="SELECT * FROM $tablename WHERE email='$email'";
                return $conn->query($sqlstr);
            }
            function deleteuser($email,$table,$conn){
               
                $sqlstr="DELETE FROM $table WHERE email='$email'";
                $res= $conn->query($sqlstr);
                if($res==true){
                    echo "Record deleted successfully";
                }
                else{
                    echo "cannot delete Because of the error =".$conn->error;//error debug using this property
                }
            }
               
            }
            
            
?>