<?php
include("../Admin_Model/userdb.php");

//delete user
if(isset($_REQUEST['delbtn'])){
    $email=$_REQUEST['inputdt'];
    
    $mydb=new userdb();
    $conn=$mydb->opencon();
    $mydb->deleteuser($email,"reg",$conn);
    
    
    
}
?>