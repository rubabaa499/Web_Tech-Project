
<?php
include("../Admin_control/seller.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Registration</title>
   
</head>
<body>
       
   <p> <div id="reg"> 
<h1>Seller Registration</h1>
</p>


</div>
    <form   action="" method="POST" enctype ="multipart/form-data"  >
    
    <div class="parent-form">
    <div class="form1">
   
    <div class="labelname">
<h3>First Name :
        <div class="inboxname">
<input type="text" name="fname" id="fname" placeholder="Seller First Name">
<div class="Error">
<p id="nameError1"></p>
</div>
</div>
</div>

</h3>

<br><br>
<h3>
        <div class="labelname2"> 
Last Name :
<div class="inboxname2">
<input type="text" name="lname" id="lname" placeholder="Seller Last Name" >
<div class="Error2">
<p id="nameError2"></p>
</div>
</div>
</div>
</h3>

<br><br>



<br><br>



<h3>
<div class="labelname4"> 
Gender :
<div class="inboxname4">
<input type="radio" name="gender" id="male"  value="Male" >Male
<input type="radio" name="gender" id="female" value="Female"  >Female
<input type="radio" name="gender" id="other" value="Other" >Other
<div class="Error4">
<p id="radiovalue">Please Select A Radio Button</p>
</div>
</div>
</div>
</h3>

<br><br>
<h3>
<div class="labelname5"> 
Address :
<div class="inboxname5">
<input type="text" name = "address" id="ads" placeholder="Present address" >
<div class="Error5">
<p id="Errorads"></p>
</h3>


<br><br>
<h3>
<div class="labelname5"> 
Email :

<div class="inboxname5">

        <input type="email" name="email" id="email" placeholder="Email"  >
        <div class="Error5">
        <p id="mailerror"></p>
        </h3>
   
<br>
<br>
<h3>
Insert Your Photo :
<input type="file" name="myfile" id ="file">
                <!-- <p id="imagePreview"></p> -->
                </h3>
        <br><br>
       

 
       
        

        
        </div>

   <div class="form2">
           <h3 class="center">
        Mandatory Items
        </h3>
        <div class="labelname">
    
        Seller Name : 
        <div class="inboxname">
        <input type="text" name="Seller_name" id="Sname" placeholder="Seller name" >
       <div class="errorSname">
        <p id = "errorSname"></p>
        </div>
        </div>
        </div>
       
        
        <br><br>
        <div class="labelname">
        Password : 
        <div class="inboxname">
        <input type="password" name="Seller_pass" id="pass" placeholder="Seller Password" >
        <div class="errorpw">
        <p id="errors"></p>
        </div>
        </div>
        </div>
        
        <br><br>

<div class="labelname1">
        Confirm Password : 
        <div class="inboxname">
        <input type="password" name="Confirm_seller_pass" id="mpass" placeholder="Confirm Seller Pass"> 
        <div class="errorpw">
        <p id="errormatch"></p>
        </div>
        </div>
        </div>
      

        <input type="reset" value="Reset" class="button_reset"> 

        <input type="submit" name="sub" id="Submit" class="button_submit" value="Register">
        <!-- <p id="error"></p> -->
        
        <br>
        
       
        
        
        <br><br>
           
<!-- <a href="Seller_Login.php">Login page</a> -->
        </div>
</div>

    </form>

   
</body>
</html>