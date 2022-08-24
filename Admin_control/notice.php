<?php
include("../Admin_Model/noticedb.php");
$x=0;
if(isset($_REQUEST['submit'])){
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
    $mydb->postnotice($serial,$notice,$date,"noticedb",$conn);
    }
    else{
        echo "Please fill all the fields";
    }

}


   

?>