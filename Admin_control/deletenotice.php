<?php
include("../Admin_Model/db.php");
//delete notice
if(isset($_REQUEST['delete'])){
    $serial=$_REQUEST['del'];
    
    $mydb=new Notice();
    $conn=$mydb->opencon();
    $mydb->deletenotice($serial,"noticedb",$conn);
    
    
    
}
?>