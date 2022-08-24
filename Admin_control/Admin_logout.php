<?php
session_start();

if(session_destroy()) // Destroying All Sessions
{

    header("Location:../Admin_View/Admin_Login.php"); // Redirecting To Home Page	
}
?>