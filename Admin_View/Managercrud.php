<?php 
include ("../Admin_control/Manager.php");
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Registration Page</title>
    <link rel="stylesheet" href="../Admin_CSS/maanreg.css">
    

</head>


<html>
    <title>Manager Registration </title>
    <body>
    <div class="header">
        <h1 align="center">Manager Register Here</h1>
        </div>

    
        <div class="forms">
        <form action="" method="POST"  enctype="multipart/form-data">
        <div class="regdetails">
                <legend>Registration Details:</legend>
</div>
            <table>
                <tr> 
                <td>First Name: </td>
                <td><input type= "text" name="fname" placeholder="Enter your First Name?">
                <?php echo $invalidfname; ?>
               
                </tr></td>
        
                <tr><td>Last Name: </td>
                <td><input type="text"  name="lname" placeholder="Enter your Last Name?">
                <?php echo $invalidlname; ?>

                </tr></td>
                <tr><td>Age: </td>  
        <td><input type="number" name="age" placeholder="Enter your Age?">
        <?php echo $invalidage; ?>
    </tr></td>
    <tr>
        <td>Gender: </td>
        <td>
            <input type="radio" name="g1" value="Male" >Male
            <input type="radio" name="g1" value="Female" >Female
            <input type="radio" name="g1" value="Others">Others
        </td>
    </tr>
    
   


        <tr><td>E-mail: </td>
            
        <td><input type="email" name="Email" placeholder="Enter your E-mail?">
        <?php echo $invalidemail; ?>
        
    </tr></td>

    
</table>

<div class="regdetails">
   
        <legend>Important Informations</legend>
</div>
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
    
    </tr></td>
       
        

       
       <tr><td> 
        <input type="submit" name="Submission" value="Add" class="button button1">
         <input type= "reset" name="Res" value = "Reset" class="button button2">
    </td></tr>
</div>
            </table>

        </form>
        

        </table>




<h4>Go To <a href="../Admin_View/Aboutmanager.php">Manager Page</a></h4>
    </body>
</html>