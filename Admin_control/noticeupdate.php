<?php
include("../Admin_model/noticedb.php");
$x=0;
if(isset($_REQUEST['update'])){
    $serial=$_REQUEST['serial'];
    $notice=$_REQUEST['notice'];
    $date=$_REQUEST['noticedate'];
    if(empty($serial)){
        echo "<br>";
        echo "Field cannot be empty";
        echo "<br>";
    }
    else{
        echo "<br>";
        echo "Serial no inserted";
        $x++;
        echo "<br>";
    }

    if(empty($notice)){
        echo "<br>";
        echo "Field cannot be empty";
        echo "<br>";
    }
    else{
        echo "<br>";
        echo "Notice inserted";
        $x++;
        echo "<br>";
    }
    if(empty($date)){
        echo "<br>";
        echo "Field cannot be empty";
        echo "<br>";
    }
    else{
        echo "<br>";
        echo "Date inserted";
        $x++;
        echo "<br>";
    }

    if($x==3){
    $mydb=new Notice();
    $conn=$mydb->opencon();
   $mydb->updatenotice($serial,$notice,$date,"noticedb",$conn);
    }
    else{
        echo "Please insert all fields";
    }

}

?>