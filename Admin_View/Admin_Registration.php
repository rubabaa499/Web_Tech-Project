<?php
include("../Admin_control/Admin_Registration_Validation.php");
?>


<html>
    <title>Admin Registration </title>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="../Admin_CSS/AdminReg.css">
    </head>
    <body>
        <p id="ajaxresponse"></p>
       
    <div class="header">
    <h1>Admin Registration Page</h1>
    </div>
        <div class="forms">
        <form action="" method="POST"   enctype="multipart/form-data"  onsubmit="return checkform()">
           <div class="regdetails">
                <legend>Registration Details:</legend>
</div>
            <table>
            
                <tr> 
                   
                <td>First Name: </td>
                <td><input type= "text" name="fname" id="name1" onkeyup="fnamecheck()" placeholder="Enter your First Name?">

                <label id="fnameerror"></label>
                </td>
                </tr>
        
                <tr><td>Last Name: </td>
                <td><input type="text"  name="lname" id="name2" onkeyup="lnamecheck()" placeholder="Enter your Last Name?">
               
                <label id="lnameerror"></label>

                </tr></td>
                <tr><td>Age: </td>  
        <td><input type="number" name="age" id="age1" onkeyup="agecheck()" placeholder="Enter your Age?">
      
        <label id="ageerror"></label>
    </td></tr>
    <tr>
        <td>Gender: </td>
        <td>
            <input type="radio" name="g1" value="Male" id="M" onclick="checkgender()">Male
            <input type="radio" name="g1" value="Female" id="F" onclick="checkgender()">Female
            <input type="radio" name="g1" value="Others" id="other" onclick="checkgender()">Others 
            <label id="radioerror"></label>
           

        </td>
    </tr>
    
    <tr>
        <td>Mobile No:</td>
        <td>
            <input type="tel" name="Admin_num" id="mob" onkeyup="checkmobile()" placeholder="Enter your Phone Number?">
           
            <label id="Mobilerror"></label>
        </td>
    </tr>


        <tr><td>E-mail: </td>
            
        <td><input type="email" name="Email" id="mail" onkeyup="checkemail()" placeholder="Enter your E-mail?">
       
        <label id="emailerror"></label>
        
    </td></tr>
        
    <tr>
        <td> Upload a Profile Picture:</td>
        <td>
            <input type="file" name="myfile" id="f1" onclick="checkfile()">

         <label id="fileerror"></label>
            
        </td>
    </tr>
</table>

        
    
<div class="regdetails">
        <legend>Important Informations</legend>
</div>

        <table>

        <tr>
            <td>Admin Name: </td>
            <td>
                <input type="text" name="Admin_name" id="admin" onkeyup="myAJAXname()" placeholder="Enter your Admin Name?">
               
                <label id="nameerror"></label>
            </td>
        </tr>

        <tr><td>Password: </td>

        <td><input type="password" name="pass" id="pass1" onkeyup="checkpass()" placeholder="Enter your Password?"> 
        <input type="checkbox" id="showpass">Show/Hide Password</input>  
        <p id="passerror"></p>
        
       
    
    </td>
    
    </tr>

    <tr><td>Confirm Password: </td>

   

        <td><input type="password" name="c_pass" id="cpass"  onkeyup="checkconpass()" placeholder="Please Re-Enter  Password?"> 
       
        <input type="checkbox" id="showpass2">Show/Hide Password</input> 
        <p id="conpasserror"></p>
        
</tr></td>
 
       
        

</div>
       <tr>
        <td> <input type="submit" name="Submission" class="button button1" id="sub" onclick="checkform()" value="Submit" > 
       <input type= "reset" name="Res" class="button button2" value = Reset></td></tr>
               
            

    </table>
    <label id="error"></label>
</form>



<h4>Go To<a href="Admin_Login.php">Login Page</a></h4>
<script src="../Admin_JS/Admin_Reg.js"></script>
    </body>
</html>