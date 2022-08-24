<?php
include("../Admin_Model/db.php");

$adminname=$_REQUEST["admin"];
if(!empty($adminname)){
    $mydb=new db();
    $conn=$mydb->opencon();
    $result=$mydb->searchadmin($conn,"admin_registration",$adminname);
    if($result->num_rows>0){
        echo "Admin Name Already Exist";
    }
    else{
        echo "Admin Name Available";
    }
}
?>
