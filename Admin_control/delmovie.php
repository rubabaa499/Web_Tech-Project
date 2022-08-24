<?php
include("../Admin_Model/moviedb.php");

if(isset($_REQUEST["del"])){
    $m_id=$_REQUEST["m_id"];
    $mydb=new moviedb();
    $conn=$mydb->opencon();
    $mydb->delmovie($conn,"movie_detail",$m_id);
}
?>