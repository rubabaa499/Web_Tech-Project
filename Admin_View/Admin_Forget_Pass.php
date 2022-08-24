<?php
include("../Admin_Control/Res_Pass.php");
?>
<html>
    <title>Forget Password</title>
    <head>
   <link rel="stylesheet" href="../Admin_CSS/forget.css">
    </head>
    <body>
    <div class="forms">
        <form action="" method="POST" >
        <div class="header">
                <h1>Password Re-New</h1>
</div>
            <div class="change">
                <legend><h2>Change Password</h2></legend>
</div>
                <table>
                    <tr>
                    <td>
                    Admin Id:
</td>
                    <td>

                    <input type="number" name="Ad_id" id="admin_id"  placeholder="Please Enter your Id?">
                    <?php echo $invalid_adminid; ?>
                    
                
                  
                    </td></tr>
                    
                    <tr>
                        <td>
                            New Pasword:
                        </td>
                        <td>
                            <input type="password" name="ad_new_pass" id="newpass" onkeyup="afterclicked()" placeholder="Please Enter a new Password?">
                            <?php echo $invalidpass; ?>
                            <input type="checkbox" id="showpass">Show/Hide Password</input> 
                            <p id="passerror"></p>
                        </td>
                    </tr>
               
                    <tr>
                        <td>
                            Confirm Password:
                        </td>
                        <td>
                            <input type="password" name="con_pass" id="conpass"  placeholder="Please Re-Enter your Password?">
                          <?php echo $invalidcf; ?>
                           <input type="checkbox" id="showpass2">Show/Hide Password</input> 
                           
                        </td>
                    </tr>
                    <td>
                        <input type="submit" name="save_pass" class="button button1" value="Save new password">
</div>
                    </td>
                </table>
                

            </form>
           
        <h4>

        Go To
            <a href="Admin_Login.php">
                Login Page
            </a>
        </h4>

       
    </body>
</html>