<?php
include("../Admin_control/notice.php");
include("../Admin_control/deletenotice.php");
?>
<html >

<head>
    <title>Post Notice</title>
    <link rel="stylesheet" href="../Admin_CSS/noticeboard.css">
</head>

<body>
    <div class="header">
    <h1>Notice Post Section</h1>
</div>
<div class="forms">
        <form action="" method="post">
         
                <tr>
                    <td><p>Serial No:</p></td>
                    <td>
                        <input type="number" name="serial" id="ser">
                    </td>
                    <br><br>
                    <p><label >Notice for Star Cineplex :</label></p>
                    <td><textarea name="notice" id="nnotice" cols="50" rows="10" placeholder="Write notice here"
                            ></textarea></td>
                    <br><br>
                    <td><p>Date:</p></td>
                    <td><input type="date" name="noticedate"></td>
                    <br><br>
                    <td><input type="submit" name="submit" value="Post Notice"  class="button button1"></td>
                    <td><input type="submit" name="show" value="Show my notices" class="button button2"></td>
                    <br><br><br>
                    <td>Enter Serial:<input type="number" name="del" ></td>
                    <td><input type="submit" name="delete" value="Delete Notice" class="button button3"></td>
                    <td>
                        <a href="Updatenotice.php">Update Notice</a>
                    </td>
                    
                </tr>
                <?php
       $servername="localhost";
       $username="root";
       $password="";
       $dbname="web_project";
       $tablename="noticedb";
       //create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//connection check
if($conn->connect_error){
   echo "error connecting database";
}
if(isset($_REQUEST["show"])){
    $sql="SELECT * FROM $tablename";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        echo "<table border='2'>";
        echo "<tr><th>Notice</th><th>Date</th></tr>";
        while($row=$result->fetch_assoc()){
            echo "<tr>
            <td>".$row["Notice"]."</td>
            <td>".$row["Date"]."</td>
            </tr>";
        }
        echo "</table>";
        
        
    }  
    else{
        echo "No record founds";
    
    }

}

    ?>
                <br>
                <a href="../Admin_View/Admin_Homepage.php">Go to Home Page</a>
                
           

</body>
</div>
</html>