<?php

include("../manager_controller/update.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Hall Information</title>
    <link rel="stylesheet" href="../managercss/style.css">

</head>

<html>
    <title>Hall Information </title>
    <body>
    <div class="header">
        <h1 align="center">New Hall</h1>
        </div>
        <form action=""method="POST"  enctype="multipart/form-data">
            <fieldset>
                <legend>Add New Hall:</legend>
            <table>
                <tr>
                    <td>Hall Name</td>
                    <td><input type="text" name="hallname" placeholder="Enter your hallrname">
                    <?php echo $invalidhallname; ?>
</td>
</tr>


<tr>
                    <td>schedule</td>
                    <td><input type="schedule" name="schedule" placeholder="Enter your schedule">
                    <?php echo $invalidschedule; ?>
                </td>


                <tr>
                    <td>Status</td>
                    <td><input type="status" name="status" placeholder="Enter your stataus">
                    <?php echo $invalidstatus; ?>
                </td>
                <tr>
                    <td> <input type="submit" name="Submission" value="Save"></td>
                </tr>
                
                
    
                </table>
            
            </form>
            </fieldset>
            <h4>Go To, <a href="homepageview.php"> Homepage</a></h4>
            <h5>View Table <a href="updatehallview.php"> Show</a></h5>
        </body>
    </html>


                  

