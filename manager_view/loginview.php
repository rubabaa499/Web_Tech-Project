<?php

include("../manager_controller/login.php");


if(isset($_SESSION["manager_name"]))
{
    header("location:../manager_view/homepageview.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login For Manager</title>
    <link rel="stylesheet" href="../managercss/style.css">

</head>

<html>
    <title>Manager Login </title>
    <body>
    <div class="header">
        <h1 align="center">Manager Login Form</h1>
        </div>

        <form action=""method="POST"  enctype="multipart/form-data">
            <fieldset>
                <legend>Login Details:</legend>
            <table>
                <tr>
                    <td>Manager name</td>
                    <td><input type="text" name="manager_name" placeholder="Enter your managername" value="<?php if(isset($_COOKIE["manager_name"])) { echo $_COOKIE["manager_name"]; } ?>">
                    
</td>
</tr>
<tr>
                    <td>Password</td>
                    <td><input type="password" name="manager_pass" placeholder="Enter your Password" value="<?php if(isset($_COOKIE["manager_pass"])) { echo $_COOKIE["manager_pass"]; } ?>">
                </td>
                  
                   
                   
                    
</tr>
<tr>
<td> <input type="checkbox" name="Remember_me">Remember me</td>
</tr>


                <tr>
                    <td>
                        <a href="homepageview.php">Login</a>
                    </td>
                <tr>
                    <td>
                        <a href="forgotpassview.php">Forget Password</a>
                    </td>
                </tr>
                <tr>
                </tr>
            </table>
            
        </form>
        </fieldset>
        <h4>Don't Have an Account, <a href="regview.php"> Register here</a></h4>
    </body>
</html>