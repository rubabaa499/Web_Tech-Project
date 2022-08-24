<?php
include("../Seller_Control/Seller_Login_Valid.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login For Seller</title>
    <link rel="stylesheet" href="../sellerCSS/Style.css">

</head>
<body>
<div id="header">
        <h1 align="center">Seller Login Form</h1>
        </div>
    <!-- <h1>Seller Login Form</h1> -->
   
    <form action="" method="POST">
       
    <p>
          
               
                 Name : 
                <input type="text" name="Seller_name" placeholder="Full Name">
               
                 <br><br>
                 
                Password :
                <input type="password" name="Seller_pass" placeholder="Password">
                
                 <br><br>
               
               <input type="submit" name="submit" value="Submit"> 
                 
                  <br><br>
              
               <!-- <a href="Seller_forgot_pass.php">Forgot Password?</a> -->


               <a href="Seller_Reg.php">Wanna Register?
</a>
<br><br>
               <a href="Seller_forgot_pass.php">Forgot Your Password ? Update Now!
</a>

</p>
               </form>
             
               <div class="info">
 <h1>Information</h1>
    <h3>
        Contact Manager at <a href="https://www.google.com/gmail/about/">rubaba@gmail.com</a>  <br><br>
        
        Contact Admin  at <a href="https://www.google.com/gmail/about/">Hassain@gmail.com</a> 
        
    </h3>

    </div>
</body>
</html>