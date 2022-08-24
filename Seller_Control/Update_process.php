<?php
include("../sellerModel/db.php");


$invalidmname="";
$validmname ="";

$invalidtime ="";
$validtime="";

$invalidhall="";
$validhall = "";

$invalidpic="";
$validpic="";

if(isset($_POST['submit']))
{
    if($_SERVER["REQUEST_METHOD"] =="POST")
    {
        $Movie_name = $_POST["mname"];
        $Movie_time = $_POST["time"];
        $Movie_hall = $_POST["hall"];
        //$Movie_pic = $_POST["file"];
        $file="";

        if(empty($Movie_name))
        {
            $invalidmname="**Empty";
        }
        else{
            $validmname=$Movie_name;
        }
        
        if(empty($Movie_time))
        {
            $invalidtime="**Empty";
        }
        else{
            $validtime=$Movie_time;
        }

        if(empty($Movie_hall))
        {
            $invalidhall="**Empty";
        }
        else{
            $validhall=$Movie_hall;
        }

        $file = $_FILES["myfile"]["name"];
if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../uploads/" . $_FILES["myfile"]["name"]))
{
    echo"File uploaded <br>";
    echo $_FILES["myfile"]["name"];
    //session add
}
else
{
    echo"File not uploaded";
}




       

$mydb=new db();
$myconn=$mydb->opencon();


//$mydb->insertuser($fname,$lname,$age,$desig,$skill,$email,$password,$file,"employee",$myconn);
$mydb->insertuser1($Movie_name,$Movie_time,$Movie_hall,$file,"movie_detail",$myconn);












    }

}



?>