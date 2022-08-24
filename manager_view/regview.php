<?php
include("../manager_controller/reg.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Registration Page</title>
    <script src="../JS/myjs.js"></script>
     <link rel="stylesheet" href="../managercss/jquery.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../managercss/style1.css">
    

</head>



<html>
    <title>Manager Registration </title>
    <body>

    <p id="ajaxresponse"></p>
    <div class="header">
    <h1 align="center">Manager Register Here</h1>
    </div>
        <div id="flip">Click to slide down panel</div>
<div id="panel">Welcome to Movie Ticket Booking System</div>
       

    
        
        <form action="" method="POST"  enctype="multipart/form-data">
            <fieldset>
                <legend>Registration Details:</legend>
            <table>
                <tr> 
                <td>First Name: </td>
                <td><input type= "text" name="fname" placeholder="Enter your First Name?">
                <?php echo $invalidfname; ?>
                <label id="fnameerror"></label>
               
                </tr></td>
        
                <tr><td>Last Name: </td>
                <td><input type="text"  name="lname" placeholder="Enter your Last Name?">
                <?php echo $invalidlname; ?>

                </tr></td>
                <tr><td>Age: </td>  
        <td><input type="number" name="age" placeholder="Enter your Age?">
        <?php echo $invalidage; ?>
        <label id="lnameerror"></label>
    </tr></td>
    <tr>
        <td>Gender: </td>
        <td>
            <input type="radio" name="g1" value="Male" >Male
            <input type="radio" name="g1" value="Female" >Female
            <input type="radio" name="g1" value="Others">Others
            <label id="radioerror"></label>
        </td>
    </tr>
    
    <tr>
        <td>Mobile No:</td>
        <td>
            <input type="tel" name="manager_num" placeholder="Enter your Phone Number?">
         <?php echo $invalidmob; ?>
          
         <label id="Mobilerror"></label>
        </td>
    </tr>


        <tr><td>E-mail: </td>
            
        <td><input type="email" name="Email" placeholder="Enter your E-mail?">
        <?php echo $invalidemail; ?>
        <label id="emailerror"></label>
    </tr></td>

    <tr>
        <td> Upload a Profile Picture:</td>
        <td>
            <input type="file" name="myfile" >
            <label id="fileerror"></label>
        </td>
    </tr>
</table>

        
    </fieldset>
    <fieldset>
        <legend>Important Informations</legend>

        <table>

        <tr>
            <td>Manager Name: </td>
            <td>
                <input type="text" name="manager_name" placeholder="Enter your Manager Name?">
            <?php echo $invalidmanager; ?>
            </td>
        </tr>

        <tr><td>Password: </td>

        <td><input type="password" name="pass" placeholder="Enter your Password?"> 
    
        <?php echo $invalidpass; ?>
    
    </tr></td>

    <tr><td>Confirm Password: </td>

        <td><input type="password" name="c_pass" placeholder="Please Confirm Password?"> 
     <?php echo $invalidcf; ?>
     <label id="nameerror"></label>
    </tr></td>
       
        

       
       <tr><td> <input type="submit" name="Submission" value="Submit"> <input type= "reset" name="Res" value = Reset></td></tr>
               
            </table>

        </form>
        

        </table>
</fieldset>


<h4>Go To <a href="loginview.php">Login Page</a></h4>
<script src="../JS/myjs.js"></script>
<script src="../JS/jquery.js"></script>

    </body>
</html>