<?php 
include("../user_controller/ret_pass.php");  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../user_css/pass_reset.css">
    <title>Document</title>
</head>
<body>
    <form action=""method="post">

        <div class="container">
            <div class="star">
               <h2 align="center">Change Password</h2> </div>
           
            <input type="text" name="pass_user_name" placeholder="Enter valid email">
            <?php echo $invalid_email; ?>
            <br><br>
            
            <input type="password" name="pass_new_pass" placeholder="New Password">
            <?php echo $invalid_newpass; ?>
            <br><br>
           
            <input type="password" name="pass_confirm" placeholder="Confirm password">
            <?php echo $invalid_confirm; ?>
  
           <button class="butt" name="save">Save new password</button>
           <br><br>
           <button class="butt2"><a href="user_login.php">Login page</a></button>
        </div>
            



    </form>
</body>
</html>