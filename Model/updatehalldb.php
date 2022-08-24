<?php
class db{
    function opencon(){
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="updatehall";
        //create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//connection check
if($conn->connect_error){
    echo "error connecting database";
}
return $conn;

}


function Updatephall($conn,$tablename,$hallname,$schedule,$status){
        
    $sqlstr="UPDATE $tablename SET hallname='$hallname',schedule='$schedule',status='$status'  WHERE hallname='$hallname',schedule='$schedule',status='$status'";
    return $conn->query($sqlstr);
    

}



function connclose($conn){
    return $conn->close();
}




}
?>




