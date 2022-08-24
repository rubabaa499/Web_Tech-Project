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
     function insertuser($Seller_fname,$Seller_lname,$Gender,$address,$email,$file,$Seller_name,$Seller_pass,$Seller_ConSellerpass,$table,$conn)
     {
        
        $sqlstr="INSERT into $table(Seller_fname,Seller_lname,Gender,address,email,picture,Seller_name,Seller_password,Seller_Conpassword) 
        VALUES ('$Seller_fname','$Seller_lname','$Gender','$address','$email','$file','$Seller_name','$Seller_pass','$Seller_ConSellerpass')";
        if($conn->query($sqlstr)){
            
            echo "<br>Data is being inserted";
         

        }
        else{
            echo "can't insert".$conn->error;//error debug using this property
        }
            }

            function checklogin($conn,$tablename,$Seller_name,$Seller_pass)
            {
                $sqlstr="SELECT Seller_name,Seller_password FROM $tablename WHERE Seller_name='$Seller_name' AND Seller_password='$Seller_pass' ";
                return $conn->query($sqlstr);
        
            }

            function searchuser($conn,$tablename,$Seller_name){
                $sqlstr="SELECT * FROM $tablename WHERE Seller_name='$'";
                return $conn->query($sqlstr);
            }
            function SearchuserbySellername($conn,$tablename,$Seller_nameN){
                $sqlstr="SELECT * FROM $tablename WHERE Seller_name='$Seller_nameN'";
                return $conn->query($sqlstr);
        
            }
        

            function Updateprofile($conn,$tablename,$Seller_name,$Seller_pass,$Seller_ConSellerpass){
        
                $sqlstr="UPDATE $tablename SET Seller_name='$Seller_name',Seller_password='$Seller_pass', Seller_Conpassword='$Seller_ConSellerpass'  WHERE Seller_name ='$Seller_name'";
                return $conn->query($sqlstr);
                
        
            }
        

            function insertuser1($Movie_name,$Movie_time,$Movie_hall,$file,$table,$conn)
            {
               
               $sqlstr="INSERT into $table(Movie_name,Movie_time,Movie_hall,Movie_picture) 
               VALUES ('$Movie_name','$Movie_time','$Movie_hall','$file')";
               if($conn->query($sqlstr)){
                   echo "<br>Data is being inserted";
               }
               else{
                   echo "can't insert".$conn->error;//error debug using this property
               }
                   }




        }



?>