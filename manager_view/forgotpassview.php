<?php
include("../manager_controller/reset.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot password Page</title>
    <link rel="stylesheet" href="../managercss/style.css">

</head>




<html>
    <title>Forget Password</title>
    <body>
    <div class="header">
        <h1 align="center">Reset password Here</h1>
        </div>
        <form action="" method="POST">
            <fieldset>
                <h1>Password Re-New</h1>
            </fieldset>
            <fieldset>
                <legend><h2>Change Password</h2></legend>

                <table>
                    <tr>
                    <td>
                    Manager Name:
</td>
                    <td>

                    <input type="text" name="mn_name">
                    <?php echo $invalid_managername ?>
                    </td></tr>
                    
                    <tr>
                        <td>
                            New Pasword:
                        </td>
                        <td>
                            <input type="password" name="mn_new_pass">
                            <?php echo $invalidpass ?>
                        </td>
                    </tr>
               
                    <tr>
                        <td>
                            Confirm Password:
                        </td>
                        <td>
                            <input type="password" name="con_pass">
                            <?php echo  $invalidcf ?>
                        </td>
                    </tr>
                    <td>
                        <input type="submit" name="save_pass" value="Save new password">
</td>
                </table>
                

            </fieldset>
        </form>
        <h4>

        Go To
            <a href="loginview.php">
                Login Page
            </a>
        </h4>

        
    </body>
</html>