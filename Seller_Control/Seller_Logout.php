<?php






session_start();


if(session_destroy()) // Destroying All Sessions
{
header("Location: ../Seller_View/Seller_Login.php"); // Redirecting To Home Page
}





?>