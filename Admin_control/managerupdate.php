<?php
include("../Admin_Model/managerdb.php");

if(isset($_POST['Submission'])){
    $email=$_POST['manager_mail'];
    $pass=$_POST['pass'];
    $cpass=$_POST['c_pass'];
    $mydb=new managerdb();
    $obj=$mydb->opencon();
    $obj->update($obj,"manager_reg",$email,$pass,$cpass);
}
?>