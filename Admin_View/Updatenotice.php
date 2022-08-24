<?php
include("../Admin_control/noticeupdate.php");
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
    <div class="body">
        <form action="" method="post">
         
                <tr>
                    <td>Serial No:</td>
                    <td>
                        <input type="number" name="serial">
                    </td>
                    <br><br>
                    <p><label >Notice for Star Cineplex :</label></p>
                    <td><textarea name="notice" id="nnotice" cols="50" rows="10" placeholder="Write notice here"
                            ></textarea></td>
                    <br><br>
                    <td>Date:</td>
                    <td><input type="date" name="noticedate"></td>
                    <br><br>
                    <td><input type="submit" name="update" value="Update Notice" class="button button1"></td>
                   
                    
                </tr>
                

                <br>
                <a href="../Admin_View/Admin_Homepage.php">Go to Home Page</a>
                
           

</body>

</html>