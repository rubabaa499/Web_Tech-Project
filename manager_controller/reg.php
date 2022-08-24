<?php
include("../Model/db.php");
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
$validmanager="";
$invalidmanager="";
$validcon="";
$validgen="";
$validpic="";
$invalidpic="";


$x=0;
//email regex
$email_reg = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/"; 
//password regex
$pass_reg = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";

//age must be more than 1 digit pattern
$age_reg =" /^\d{2}$/";

if(isset($_REQUEST["Submission"])){
$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$age=$_REQUEST["age"];
$pass=$_REQUEST["pass"];
$email=$_REQUEST["Email"];
$myfile=$_FILES["myfile"]["name"];
$temp_name=$_FILES["myfile"]["tmp_name"];

$mob_no=$_REQUEST["manager_num"];
$cf=$_REQUEST["c_pass"];
$manger_name=$_REQUEST["manager_name"];


if(empty($fname) || is_numeric($fname)|| strlen($fname)<3){	
    $invalidfname=" Please Enter your First name";

}

else{
    
    echo "Valid First Name<br>";
        $validfname=$fname;
        $x++;
        echo "First Name : " . $validfname;
}
echo "<br>";

if(empty($lname)|| is_numeric($lname)|| strlen($lname)<3){	
    $invalidlname=" Please Enter your First name";

}

else{
    
    echo "Valid Last Name<br>";
    $validlname=$lname;
    $x++;
    echo "Last Name : " . $validlname;
}
echo "<br>";


if(empty($email)){
    $invalidemail="Please Enter a Valid Email";
    echo "<br>";
 
}
else{
    if(preg_match($email_reg,$email)){
        $validateemail=$email;
        echo "Valid Email<br>";
        $x++;
    }
    else{
        $invalidemail="Email is not valid";
        echo "<br>";
        echo  $invalidemail;
        
    }
   
}
echo "<br>";

if(empty($pass)){
    $invalidpass="Please Enter a Valid Password";
    echo "<br>";
}
else{
   
    if(strlen($pass)>=8){
        $validpass=$pass;
        echo "Password Entered<br>";
        $x++;
    }
    else{
        $invalidpass="Password is not valid!";
        echo $invalidpass;
        echo "<br>";
    }
}
echo "<br>";
if(empty($cf)){
    $invalidcf="Please Confirm Password";
    echo $invalidcf;
    echo "<br>";
}
else{
    if($cf==$pass){

        $validcf=$cf;
        echo "Confirm Password Entered<br>";
        $x++;
    }
    else{
        $invalidcf="Password not matched try again!";
        echo $invalidcf;
        echo "<br>";
        echo $invalidcf;
    }
}

if(empty($age)){
    $invalidage="Please Enter your Age!";
    echo "<br>";
}
else if($age>=16 && preg_match($age_reg,$age)){
    $validage=$age;
    $x++;
    echo "Valid Age<br>";
}
else{
    $invalidage="Age must be more than 1 digits";
    echo "<br>";
}

echo "<br>";

if(isset($_REQUEST["g1"])){
    $validgen=$_REQUEST["g1"];
    echo"perfect";	
    $x++;

    echo "<br>";
}
else{  
    echo "Please select a Gender<br>";
}
echo "<br>";

if(strlen($mob_no)>=11 && !empty($mob_no)){
    echo "Valid Mobile Number";
    echo "<br>";
    $validmob=$mob_no;
    $x++;
    echo "Mobile Number : " . $validmob;
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

if(move_uploaded_file($temp_name,"../manager_uploads/".$myfile)){
    $validpic=$myfile;
    echo $validpic." is Uploaded";
    echo "<br>";
    $x++;
}
else{
    $invalidpic= "File not Uploaded";
    echo "<br>";
}

if(empty($manger_name)){
    $invalidmanager="You must enter your name!";
    echo $invalidmanager;
    echo "<br>";	
}
else{
    $validmanager=$manger_name;
    echo "perfecto";
    $x++;
}





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

//registration using mysql database
if($x==10){
    $mydb=new db();
    $myconn=$mydb->opencon();
    $result=$mydb->insertmanager($validfname,$validlname,$validage,$_REQUEST["g1"],$validmob,$validateemail,$validpic,$validmanager,$validpass,$validcf,"manager_reg",$myconn);
   
}

}


?>