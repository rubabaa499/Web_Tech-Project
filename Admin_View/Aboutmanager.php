<?php
include("../Admin_control/deletemanager.php");
?>
<html>
    <title>Manager Info</title>
    <head>
        <link rel="stylesheet" href="../Admin_CSS/manager.css">
    </head>
    <body>
        <div class="header">

            <h1>Manager Informations</h1>
        </div>
        <form action="" method="POST">
       
   <table border="2">
    <tr>
       
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Manager Name</th>
    </tr>
    <?php
       $servername="localhost";
       $username="root";
       $password="";
       $dbname="web_project";
       $tablename="manager_reg";
       //create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//connection check
if($conn->connect_error){
   echo "error connecting database";
}

$sql="SELECT fname,lname,age,gender,num,email,username FROM $tablename ";
$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
      echo "<tr><td>".$row["fname"]."
      </td><td>".$row["lname"]."
      </td><td>".$row["age"]."
      </td><td>".$row["gender"]."
      </td><td>".$row["email"]."
      </td><td>".$row["username"]."</td></tr>";
     
    }
    echo "</table>";
   
   
}  
else{
    echo "No record founds";

}

    ?>



    
   
   
   </table>
<br>
   <a href="../Admin_View/Managercrud.php">Add Manager</a>
   <br><br>
   <input type="email" name="delsearch">
   <input type="submit" name="delbtn" Value="Delete" class="button b1">
   <br><br><br><br>
   <a href="../Admin_View/Admin_Homepage.php">Go Back</a>
    
        
    </body>
    </form>
</html>