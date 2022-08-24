<?php include ("../user_controller/reg_validation.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../user_css/reg.css">
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data" onsubmit="return authform()">

        <div class="star">
            <h1 align="center" class="glow">User Registration</h1>
        </div>
        
        <br><br><br><br>
    

        <div class="panel">
            <legend align="center"><h2>Personal Information</h2></legend>
            <label for="f_name">First name : </label>
            <input type="text" name="f_name" id="f_name" placeholder="First name" onkeyup="checkfname()">
            <p id="fnameerr"></p>
            <label for="l_name">Last name : </label>
            <input type="text" name="l_name" id="l_name" placeholder="Last name" onkeyup="checklname()" >
            <p id="lnameerr"></p>
            <label for="info">Gender : </label><br><br>
            <input type="radio" name="gender" value="male" id="male" onclick="radiocheck()"><label for="male">Male</label>
            <input type="radio" name="gender" value="female" id="female" onclick="radiocheck()"><label for="Female">Female</label>
            <input type="radio" name="gender" value="others" id="others" onclick="radiocheck()"><label for="others">Others</label>
            <p id="radioerr"></p>
            <br><br>
        
    
    <hr>
    
            <legend align="center"><h2>Contact information</h2></legend>
            <label for="mobile">Mobile number : </label>
            <input type="text" name="mobile" id="mobile" placeholder="Contact number" onkeyup="mobcheck()">
            <p id="moberr"></p>
            <br><br>
            <label for="email">Email : </label>
            <input type="email" name="email" id="email" placeholder="Email" onkeyup="emailcheck()">
            <p id="emailerr"></p>
            <br><br>
            <label for="address">Address : </label>
             <input type="text" name="address" id="address" rows="7" cols="40" placeholder="house no./road no." onkeyup="addcheck()"> 
            <p id="adderr"></p>           
            <br><br>
        
    <br><br>
     <hr>
            <br><br>
            <label for="set_pass">Password : </label>
            <input type="password" id="pass" name="set_pass" placeholder="Password" onkeyup="passcheck()">
           <p id="passerr"></p>
            <br><br>
            <label for="confirm_pass">Confirm password : </label>
            <input type="password" id="con" name="confirm_pass" placeholder="Confirm password" onkeyup="concheck()">
           <p id="conerr"></p>
            <br><br>
           <button name="submit" id="submit" value="register" class="butt1" onclick="submit()">
           <a href="">Register</a></button>
           <button name="login" class="butt1"><a href="user_login.php">Back to login</a> </button>
            <br><br>
        </div>
        
</form>

</body>

<script src="../user_js/regval.js">
</script>
</html>