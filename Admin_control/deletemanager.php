<?php
include("../Admin_Model/managerdb.php");

if(isset($_REQUEST["delbtn"])){
    $email=$_REQUEST["delsearch"];
    $mydb=new managerdb();
    $obj=$mydb->opencon();
    $mydb->deleteuser($email,"manager_reg",$obj);

}
?>