<?php
class sellerdb{
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
 function insertseller($fname,$lname,$gender,$add,$email,$file_upload,$Seller_name,$password,$confirm_password,$table,$conn){

        
        $sqlstr="INSERT into $table(Seller_fname,Seller_lname,gender,address,email,file_upload,Seller_name,Seller_password,Seller_Conpassword) VALUES ('$fname','$lname','$gender','$add','$email','$file_upload','$Seller_name','$password','$confirm_password')";
        if($conn->query($sqlstr)){
           
            echo "Inserted";
        }
        else{
            echo "cannot insert Because of the error =".$conn->error;//error debug using this property
        }
            }
        }