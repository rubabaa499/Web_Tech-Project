<?php
include("../Model/cruddb.php");
$validhallname="";
$validschedule="";
$validstatus="";	
$invalidhallname="";
$invalidschedule="";
$invalidstatus="";




if(isset($_REQUEST["Submission"])){
    $hallname=$_REQUEST["hallname"];
    $schedule=$_REQUEST["schedule"];
    $status=$_REQUEST["status"];




    if(empty($hallname) || is_numeric($hallname)|| strlen($hallname)<3){	
        $invalidhallname=" Please Enter a Hall name";
    
    }
    
    else{
        
        echo "Valid Hall Name<br>";
            $validhallname=$hallname;
            
            echo "Hall Name : " . $validhallname;
    }
    echo "<br>";

    
    if(strlen($schedule)>1 && !empty($schedule)){
        echo "Valid schedule";
        echo "<br>";
        $validschedule=$schedule;
        
        echo "schedule " . $validschedule;
    }
    else{
        $invalidmob="schedule is not valid";
        echo "<br>";
    }
    echo "<br>";
    
    if(empty($status) || is_numeric($status)|| strlen($status)<3){	
        $invalidstatus=" Please Enter a status";
    
    }
    
    else{
        
        echo "Valid status<br>";
            $validstatus=$status;
            
            echo "status : " . $validstatus;
    }
    echo "<br>";







    





    
        $mydb=new db();
        $myconn=$mydb->opencon();
        $result=$mydb->inserthall($validhallname,$validschedule,$validstatus,"crud",$myconn);
       
       
    



}
?>
   