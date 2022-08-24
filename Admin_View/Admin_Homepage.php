<?php

include("../Admin_control/process.php");

?>

<html>

    <title>Admin HomePage</title>
    <head>
        <link rel="stylesheet" href="../Admin_CSS/adminhomepage.css">
    </head>

<body>

<div class="forms">
<form action="" method="POST">
           <div class="header">
            <h2 align="center">Welcome To Admin HomePage</h2>
</div>
            <div class="topnav">   
     <a href="../Admin_View/moviedetails.php">Movie details</a>
     <a href="../Admin_View/Aboutseller.php">Seller Informations</a>
     <a href="../Admin_View/Aboutmanager.php">Manager Informations</a>
     <a href="../Admin_View/AboutUser.php">User Informations</a>
     <a href="../Admin_View/AboutAdmin.php">Admin Panel</a>
    <a href="../Admin_View/noticeboard.php">Post Notice</a>
     <a href="../Admin_control/Admin_logout.php">Logout</a>
    

</div>
</div>

 
   

        
   
   


</form>
</body>
</html>