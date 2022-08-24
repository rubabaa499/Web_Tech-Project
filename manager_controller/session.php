<?php
// session_start();
if(isset($_SESSION["manager_name"])){
    echo "<h2>Welcome  ".$_SESSION["manager_name"]."</h2>";  
}

if(empty($_SESSION["manager_name"])){

    header("Location:../manager_view/login.php");
}
?>