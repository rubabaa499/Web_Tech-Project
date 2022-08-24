<?php
include("../Seller_Control/Update_process.php");
$Cookie_name="Seller";
$Cookie_value="You can update in here!";
setcookie($Cookie_name,$Cookie_value,time() + 86400, "/");

if(!isset($_COOKIE[$Cookie_name]))
{
    echo "<h3 class='sname'> Cookie Named <span class='spanclass'>" . $Cookie_name . " is not set !</span></h3>";
}
else{
    echo "<h3 class='sname'> Cookie is set!<br></h3> ";
    echo "<h3 class='sname'> HI <span class='spanclass'> " . $Cookie_name ."</span></h3>";
}




$conn = new mysqli("localhost","root","","web_project");

if(isset($_POST['Searchdata']))

{
   $search = $_POST['search'];
   $query1 ="SELECT * FROM movie_detail WHERE Movie_ID = '$search' ";

  
   $data = $conn->query($query1);
   
  // $data -> fetch_assoc()

   $result = mysqli_fetch_assoc($data);
   //$name = $result['Movie_name'];
   //echo $name;

}









?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Update Delete</title>
    <link rel="stylesheet" href="../sellerCSS/Update.css">
</head>
<body>
    <h1 class="head1">
    Work-Space 
    </h1>
 
        <!-- <img src="../Images/person.jpg" alt="Person" width="100" height="100">  -->

      <h2 class="orange">Insert Update Operation</h2>
      <h2 class="Show1">Show Details--</h2>
      <a href="Seller.php">Back to HomePage</a>
      <div class="parent">
     
      <div class="form1">

<form  action="" method="POST" enctype ="multipart/form-data">

<input type="text" name="search"  id="" class="" placeholder="Search Movie ID"
 value="<?php if(isset($_POST['Searchdata']))
 {
   echo $result['Movie_ID'];
 }
 ?>"> 
 
<input type="submit" value="Search" name="Searchdata" class="btn">


    <h3>Movie Name </h3> 
    <input type="text" name="mname" value="<?php if(isset($_POST['Searchdata']))
 {
   echo $result['Movie_name'];
 }
 ?>"> 

   <h3>Movie Time </h3>
    <input type="text" name="time" value="<?php if(isset($_POST['Searchdata']))
 {
   echo $result['Movie_time'];
 }
 ?>"> 

  <h3>Movie Hall </h3>

    <input type="text" name="hall" value="<?php if(isset($_POST['Searchdata']))
 {
   echo $result['Movie_hall'];
 }
 ?>">

  <h3>Movie picture </h3>

    <input type="file" name="myfile" id="file">
 
<br>
 
    <input type="submit" value="submit" name="submit"> 
    <input type="submit" value="Update" name="update" > 

   
    </form>
    </div>
    
  
<br><br><br>
   <div class="show">

    
<table border="2">

    <tr>
        <th>Movie ID</th>
        <th>Movie Name</th>
        <th>Movie Timings</th>
        <th>Movie Hall</th>
        <th>Movie Picture Upload</th>
        <th>Delete Operation</th>
    </tr>
    </div>
    
    </div>
    <?php

$conn = new mysqli("localhost","root","","web_project");
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $delete = "DELETE FROM movie_detail WHERE Movie_ID = ' $id'";

    if ($conn->query($delete) === TRUE) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . $conn->error;
      }
      

    
}

if(isset($_POST['update']))
{

 $id = $_POST['search'];
 $mname = $_POST['mname'];
 $mtime = $_POST['time'];
 $mhall = $_POST['hall'];


 $updateQuery = "UPDATE movie_detail SET Movie_name = '$mname' ,   Movie_time = '$mtime',
 Movie_hall = '$mhall' WHERE Movie_ID = '$id'  ";
  
$data1 = mysqli_query($conn,$updateQuery);
if($data1 )
{
    echo "Updated";
}
else
{
    echo"Failed to update";
}


}



if($conn->connect_error)
{
    die("Connection failed:" . $conn->connect_error);

}
$sql ="SELECT Movie_ID,Movie_name,Movie_time,Movie_hall,Movie_picture from movie_detail";
$result = $conn->query($sql);

if($result -> num_rows > 0)
{
    while($row =$result-> fetch_assoc())
    {
        
        echo"
        <tr>
        <td>" .$row["Movie_ID"]."</td>
        <td>" .$row["Movie_name"]."</td>
        <td>". $row["Movie_time"] . "</td>
        <td>" .$row["Movie_hall"] . "</td>
        <td>" .$row["Movie_picture"] . "</td>
        <td><a href = 'Update.php?id=".$row['Movie_ID']."'>Delete</td>
    </tr> ";
    }
    echo "</table>";


}
else
{
    echo "0 result";
}


$conn -> close();
    ?>




</table>
   
</body>
</html>

