<?php
class Notice{
    function opencon(){
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="web_project";
        //create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//connection check
if($conn->connect_error){
    echo "error connecting database";
}
return $conn;
    }
    function postnotice($serial,$notice,$date,$table,$conn){
        $sqlstr="INSERT into $table(Serial,Notice,Date) VALUES ('$serial','$notice','$date')";
        if($conn->query($sqlstr)){
           
            echo "Record inserted successfully";
        }
        else{
            echo "cannot insert Because of the error =".$conn->error;//error debug using this property
        }
            }

            function show($conn,$tablename,$notice,$date){
                $sqlstr="SELECT * FROM $tablename";
                return $conn->query($sqlstr);
                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                      echo "<tr><td>".$row["Notice"]."</td><td>".$row["Date"]."</td></tr>";
                    }
                    echo "</table>";
                   
                   
                }  
                else{
                    echo "No record founds";
                
                }
            }
            function updatenotice($serial,$notice,$date,$table,$conn){
                $sqlstr="UPDATE $table SET Notice='$notice',Date='$date' WHERE Serial='$serial'";
                if($conn->query($sqlstr)){
                    echo "Record updated successfully";
                }
                else{
                    echo "cannot update Because of the error =".$conn->error;//error debug using this property
                }
            }

        function deletenotice($serial,$table,$conn){
                $sqlstr="DELETE FROM $table WHERE Serial='$serial'";
                $res= $conn->query($sqlstr);
                $checkprimary=$conn->query("SELECT Serial FROM noticedb WHERE Serial='$serial'");
    if($checkprimary->num_rows>0){
        if($res==true){
            echo "Record deleted successfully";
        } 
    }
    else{
        echo "No record founds";
    
    }
            }
    }
?>