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
            function insertuserreg($fname,$lname,$gender,$mobile,$email,$address,$set_pass,$table,$conn){
        
        $sqlstr="INSERT into $table(fname,lname,gender,mob,email,address,password) VALUES ('$fname','$lname','$gender','$mobile','$email','$address','$set_pass')";
        if($conn->query($sqlstr)){
            echo "Data is inserted";
        }
        else{
            echo "Insertiona Failed !!!!".$conn->error;//error debug using this property
        }
            }
        
            function checklogin($conn,$tablename,$email,$set_pass)
            {
                $sqlstr="SELECT email,password FROM $tablename WHERE email='$email' AND password='$set_pass' ";
                return $conn->query($sqlstr);

            }

            function login($conn,$tablename,$email,$set_pass)
            {
                $sqlstr="SELECT email,password FROM $tablename WHERE email='$email' AND password='$set_pass' ";
                return $conn->query($sqlstr);
            }
           
            function updatepass($conn,$tablename,$email,$set_pass)
            {
                $sqlstr="UPDATE $tablename SET password='$set_pass' WHERE email='$email'";
                return $conn->query($sqlstr);
            }

            function bookmovie($conn,$tablename,$movie_name,$movie_date,$movie_email,$vanue)
            {
                $sqlstr="INSERT into $tablename(movie,date,email,vanue) VALUES ('$movie_name','$movie_date','$movie_email','$vanue')";
                return $conn->query($sqlstr);
            }
        }

?> 