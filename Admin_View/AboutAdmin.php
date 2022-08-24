
<html>
    <title>Admin Info</title>
    <head>
        <link rel="stylesheet" href="../Admin_CSS/admin.css">
    </head>
    <body>
        <div class="header">
    <h1>Admin Informations</h1>
</div>
        <form action="" method="POST">
       
   <table border="2">
    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Mobile No</th>
        <th>Email</th>
        <th>Admin Name</th>
    </tr>
    <?php
       $servername="localhost";
       $username="root";
       $password="";
       $dbname="web_project";
       $tablename="admin_registration";
       //create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//connection check
if($conn->connect_error){
   echo "error connecting database";
}

$sql="SELECT id,fname,lname,age,gender,mob_no,email,admin_name FROM $tablename ";
$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
      echo "<tr><td>".$row["id"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["age"]."</td><td>".$row["gender"]."</td><td>".$row["mob_no"]."</td><td>".$row["email"]."</td><td>".$row["admin_name"]."</td></tr>";
    }
    echo "</table>";
   
   
}  
else{
    echo "No record founds";

}

    ?>



    
   
   
   </table>

   <a href="../Admin_View/Admin_Homepage.php">Go Back</a>
    
        
    </body>
    </form>
</html>