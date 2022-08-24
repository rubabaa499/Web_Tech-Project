<?php
// session_start();
if(isset($_SESSION["admin_name"])){
    echo "<marquee><h2>Welcome  ".$_SESSION["admin_name"]."</h2></marquee>";  
}

if(empty($_SESSION["admin_name"])){

    header("Location:../Admin_View/Admin_Login.php");
}
?>