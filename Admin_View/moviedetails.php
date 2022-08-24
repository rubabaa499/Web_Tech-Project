<?php
include("../Admin_control/delmovie.php");
?>
<html>
    <title>Seller Info</title>
    <head>
        <link rel="stylesheet" href="../Admin_CSS/movie.css">
    </head>
    <body>
        <div class="header">
    <h1>Movie Informations</h1>
</div>
        <form action="" method="POST">
      
   <table border="2">
    <tr>
        
        <th>Movie Name</th>
        <th>Movie Time</th>
        <th>Movie Hall</th>
    
    </tr>
    <?php
       $servername="localhost";
       $username="root";
       $password="";
       $dbname="web_project";
       $tablename="movie_detail";
       //create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//connection check
if($conn->connect_error){
   echo "error connecting database";
}

$sql="SELECT Movie_name,Movie_time,Movie_hall FROM $tablename ";
$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
      echo "<tr><td>".$row["Movie_name"]."
      </td><td>".$row["Movie_time"]."
      </td><td>".$row["Movie_hall"]."</td></tr>";
    }
    echo "</table>";
   
   
}  
else{
    echo "No record founds";

}

    ?>



    
   
   
   </table>
   

   <br>
   <input type="number" name="m_id">
   <input type="submit" name="del" value="Delete" class="button b1">
   <br><br>
   <a href="../Admin_View/Admin_Homepage.php">Go Back</a>
    
        
    </body>
    </form>
</html>