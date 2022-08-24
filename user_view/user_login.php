<?php include ("../user_controller/login_validation.php");
       
if(!(isset($_SESSION)))
{
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User panel</title>
    <link rel="stylesheet" href="../user_css/login.css">
</head>
<body>
    <form action="" method="post">

        <div class="star">
            <h1 align="center" class="glow">User Login</h1>
              
        </div>
    
       <div class="custlog">
        <br>
        <h2 align="center" class="userPanel">Customer Section</h2>
        <input type="email" name="email" placeholder="Email" >
        <?php echo $invalid_username; ?>
        <br><br>
        <input type="password" name="password" placeholder="Password">
        <?php echo $invalid_password; ?>
        <button class="butt3"><a href="pass_reset.php" >Forgot password?</a></button>

        <div>
            <br><br>
            <br>
            <button name="submit" class="butt">Login</button><br>
            <button class="butt2"><a href="user_reg.php">New Here</a></button>
        </div>
        
       </div>
            
            

      
    <div class="vote2">
        <h2>Officials login</h2>
        <marquee behavior="" direction="left"><h2><mark>This field is only for the officials </mark></h2></marquee>
       <button class="butt4"><a  href="../Admin_View/Admin_Login.php">Admin</a></button><br><br>
     <button class="butt4"><a  href="../manager_view/loginview.php">Manager</a></button>  <br><br>
      <button class="butt4" ><a href="../Seller_View/Seller_Login.php">Seller</a></button> 


      
    </div>

    <br><br><br>
      
</body>
</html>