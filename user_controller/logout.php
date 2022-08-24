<?php

session_start();

if(session_destroy())
{
    header("location:../user_view/user_login.php");
}
?>