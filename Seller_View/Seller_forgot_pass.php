<?php
// include("../Seller_Control/Seller_Forgot_update.php");

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../sellerCSS/Forgotpass.css">
</head>
<body>
    <form action="" method="">
        <fieldset>
            <h1>Password Re-New</h1>
            <p><h2>Update and change your profile</h2></p>
</fieldset>


<div class="cls">
            <legend align="center"><h2>Change password</h2></legend>
             <!-- F Name :
             <input type="text" name="fname" placeholder="Seller F Name">
             <br><br> -->
            User name : 
            <input type="text" name="Seller_name" placeholder="Seller Name">
            <br><br>
           New password : 
            <input type="password" name="Seller_pass" placeholder="Password">
            <br><br>
            Confirm password : 
            <input type="password" name="Seller_ConSellerpass" placeholder="Confirm password">
            <br><br>
            <input type="submit" name="update" value="Update">
            </div>
        <br>
        <div id="id1"><a href="Seller_Login.php">Login page</a></div>
</form>
</body>
</html>