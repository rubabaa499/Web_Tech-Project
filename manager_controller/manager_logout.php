<?php
session_start();

if(session_destroy()) // Destroying All Sessions
{
header("Location: ../manager_view/loginview.php"); // Redirecting To Home Page

}


?>