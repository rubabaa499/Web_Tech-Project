<?php
class db{
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

function inserthall($hallname,$schedule,$status,$table,$conn){

    $sqlstr="INSERT into $table(hallname,schedule,status) VALUES ('$hallname','$schedule','$status')";
    if($conn->query($sqlstr)){
        echo "data is being inserted";
    }
    else{
        echo "can't insert".$conn->error;//error debug using this property
    }
}




function deletehall($conn,$tablename,$hallname,$schedule,$status){
        
    $sqlstr=" DELETE FROM $table SET hallname='$hallname',schedule='$schedule',status='$status'  WHERE hallname='$hallname',schedule='$schedule',status='$status'";
    return $conn->query($sqlstr);
    

}






function connclose($conn){
    return $conn->close();
}




}
?>