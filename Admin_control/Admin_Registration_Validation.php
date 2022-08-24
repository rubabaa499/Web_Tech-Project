<?php
include("../Admin_Model/db.php");
$validfname="";
$validlname="";
$validemail="";	
$validpass="";
$invalidfname="";
$invalidlname="";
$invalidemail="";
$invalidpass="";
$invalidcf="";
$fnamelen="";
$lnamelen="";
$validage="";
$invalidage="";
$invalidmob="";
$validmob="";
$invalidgen="";
$validadmin="";
$invalidadmin="";
$validcon="";
$validgen="";
$validpic="";
$invalidpic="";



$x=0;
//email regex
$email_regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/"; 
$email_regex_aiub="/^\w+([-+.']\w+)*@[A-Za-z\d]+\.admin.com$/";
//password regex
$pass_regex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";

//age must be more than 1 digit pattern
$age_regex ="/^\d{2}$/";

if(isset($_POST["Submission"])){

$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$age=$_REQUEST["age"];
$pass=$_REQUEST["pass"];
$email=$_REQUEST["Email"];
$myfile=$_FILES["myfile"]["name"];
$temp_name=$_FILES["myfile"]["tmp_name"];

$mob_no=$_REQUEST["Admin_num"];
$cf=$_REQUEST["c_pass"];
$admin_name=$_REQUEST["Admin_name"];

// $mydb=new db();
// $myconn=$mydb->opencon();


if(empty($fname) || is_numeric($fname)|| strlen($fname)<5){	
    $invalidfname=" Please Enter your First name";

}

else{
    
   
        $validfname=$fname;
        $x++;
        
}
echo "<br>";

if(empty($lname)|| is_numeric($lname)|| strlen($lname)<5){	
    $invalidlname=" Please Enter your First name";

}

else{
    
   
    $validlname=$lname;
    $x++;
   
}
echo "<br>";


if(empty($email)){
    $invalidemail="Please Enter a Valid Email";
    echo "<br>";
 
}
else{
    if(preg_match($email_regex,$email)|| preg_match($email_regex_aiub,$email)){
      
        $validateemail=$email;
        $x++;
    }
    else{
        $invalidemail="Email is not valid";
        echo "<br>";
     
        
    }
   
}
echo "<br>";

if(empty($pass)){
    $invalidpass="Please Enter a Valid Password";
    echo "<br>";
}
else{
   
    if(strlen($pass)>=5 && preg_match($pass_regex,$pass)){
       
        $validpass=$pass;
        $x++;
    }
    else{
        $invalidpass="Password is not valid!";
        echo "<br>";
    }
}
echo "<br>";
if(empty($cf)){
    $invalidcf="Please Confirm Password";
    echo "<br>";
}
else{
    if($cf==$pass){

        $validcf=$cf;
        $x++;
        // echo "Confirm Password Entered<br>";
    }
    else{
        $invalidcf="Password not matched try again!";
        echo "<br>";
      
    }
}

if(empty($age)){
    $invalidage="Please Enter your Age!";
    echo "<br>";
}
else if($age>=18 && preg_match($age_regex,$age)){
    $validage=$age;
    $x++;
    
}
else{
    $invalidage="Age must be more than 1 digits";
    echo "<br>";
}

echo "<br>";

if(isset($_REQUEST["g1"])){
    $validgen=$_REQUEST["g1"];	
    $x++;

    echo "<br>";
}
else{  
    $invalidgen= "Please select a Gender<br>";
}
echo "<br>";

if(strlen($mob_no)>=11 && !empty($mob_no)){
  
    echo "<br>";
    $validmob=$mob_no;
    $x++;
  
}
else if(!empty($mob_no=="+88")){
    $invalidmob="Phone Number cannot start with +88";
    echo "<br>";       
}
else{
    $invalidmob="Mobile Number is not valid";
    echo "<br>";
}
echo "<br>";





if($_FILES["myfile"]["type"]=="image/jpg" ||$_FILES["myfile"]["type"]=="image/jpeg" || $_FILES["myfile"]["type"]=="image/png" || $_FILES["myfile"]["type"]=="image/gif"){
    if(move_uploaded_file($temp_name,"../Admin_Uploads/".$myfile)){
    $validpic=$myfile;
    $x++;
    echo "<br>";
    }
}
else{
    $invalidpic="Please upload a image";
    echo "<br>";
}


if(empty($admin_name)){
    $invalidadmin="You must enter your name!";
    echo "<br>";	
}
else{
    $validadmin=$admin_name;
    $x++;
}

if(empty($fname) || is_numeric($fname)|| strlen($fname)<5 || empty($lname)|| is_numeric($lname)|| strlen($lname)<5 || empty($email) || !preg_match($email_regex,$email) || empty($pass) || !preg_match($pass_regex,$pass) || empty($age)||empty($cf)){
    echo "Please fill up all the fields";
}

if($x==10){

//Get form data 
// $Admindata=array(
//     'FirstName'=>$_POST['fname'],
//     'LastName'=>$_POST['lname'],	
//     'Age'=>$_POST['age'],
//     'Mobile'=>$_POST["Admin_num"],
//     'E-mail'=>$_POST["Email"],
//     'Admin_Name'=>$validadmin,
//     'Password'=>$_POST["pass"],

// );
// $existing_data=file_get_contents("../Admin_Data/admin_data.json");
// $tempdata=json_decode($existing_data);
// $tempdata[]=$Admindata;

// $jsondata=json_encode($tempdata,JSON_PRETTY_PRINT);

// if(file_put_contents("../Admin_Data/admin_data.json", $jsondata)) {
//     echo " Successfully Registered <br>";
   
// }
// else {
//     echo "Not Registered Successfully!<br>";
// }

//registration using sql
    $mydb=new db();
    $myconn=$mydb->opencon();
    $mydb->insertadmin($validfname,$validlname,$validage,$_REQUEST["g1"],$validmob,$validateemail,$validpic,$validadmin,$validpass,$validcf,"admin_registration",$myconn);
   
    



}
}

?>