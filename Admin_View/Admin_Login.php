<?php

include("../Admin_control/Admin_login_Validation.php");

if(isset($_SESSION["admin_name"]))
{
    header("location:../Admin_View/Admin_Homepage.php");
}


?>

<html>
    <title>Admin Login </title>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="../Admin_CSS/AdminLogin.css">
    </head>
    <body>
        
    <div class="header">
        <h1>Admin Login Page</h1>
    </div>
    <div class="forms">
        <form action=""method="POST"  enctype="multipart/form-data" onsubmit="return checkform()">
        <div class="logindetails">
                <legend>Login Details:</legend>
        </div>
            <table>
                <tr>
                    <td>Admin name</td>
                    <h5>Suggestions: <span id="txtHint"></span></h5>
                    <td><input type="text" name="admin_name" id="admin_id" onkeyup="adminnameval() && showHint(this.value) " placeholder="Enter your Adminname" value="<?php if(isset($_COOKIE["admin_name"])) { echo $_COOKIE["admin_name"]; } ?>">
                    <p id="adminerror"></p> 
</td>
</tr>
<tr>
                    <td>Password</td>
                    <td><input type="password" name="admin_pass" id="adpass" onkeyup="passval()" placeholder="Enter your Password" value="<?php if(isset($_COOKIE["admin_pass"])) { echo $_COOKIE["admin_pass"]; } ?>">
                  
                    <input type="checkbox" id="showpass">Show/Hide Password</input>   
                    <p id="passworderror"></p>        
                </td>
                
</tr>
<tr>
<td> <input type="checkbox" name="Remember_me">Remember me</td>
</tr>

<tr>
                    <td> <input type="submit" name="Submission" class="button button1" value="Login" onclick="checkform()"></td>
</div>
                </tr>
                <tr>
                    <td>
                      <h4>  <a href="Admin_Forget_Pass.php">Forget Password</a></h4>
                    </td>
                </tr>
                <tr>
                </tr>
            </table>
            
        </form>
        </fieldset>
        <h4>Don't Have an Account, <a href="Admin_Registration.php">Register here</a></h4>
        <script src="../Admin_JS/Login.js"></script>
        <script src="../Admin_JS/ajax.js"></script>
    </body>
</html>