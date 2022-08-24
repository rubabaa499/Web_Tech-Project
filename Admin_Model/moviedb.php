<?php
class moviedb{
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
    function delmovie($conn,$table,$Movie_ID){
        $sqlstr="DELETE FROM $table WHERE Movie_ID='$Movie_ID'";
        if($conn->query($sqlstr)){
            header("Location:../Admin_View/moviedetails.php");
        }
        else{
            echo "no record found ";//error debug using this property
        }
    }
}