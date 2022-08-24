<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Hall Information</title>
    <link rel="stylesheet" href="../managercss/table.css">

</head>

<html>
    <title>Hall Information </title>
    <body>
    <div class="header">
        <h1 align="center">List of Halls</h1>
        </div>
        <form action=""method="POST"  enctype="multipart/form-data">
            <fieldset>
                <legend>List of Halls:</legend>
            <table>

<?php


                    $conn= new mysqli("localhost","root","","web_project");

                     //connection check
                     if($conn->connect_error){
                     echo "error connecting database";
                   }
                   $sql ="SELECT hallname,schedule,status  from crud";
                   $result = $conn->query($sql);
                   
                   if($result -> num_rows > 0)
                   {
                       while($row =$result-> fetch_assoc())
                       {
                   
                           echo"
                           <tr>
                           <td>" .$row["hallname"]."</td> 
            
                           <td>" .$row["schedule"]."</td>
                           <td>". $row["status"] . "</td>
                           
                        
                       </tr> ";
                       echo "<br>";
                       }
                       echo "</table>";
                    }

                else {
                    echo "No data found";
                }

            $conn -> close();
                ?>
  </table>
            
            </form>
            </fieldset>
            
        </body>
    </html>
