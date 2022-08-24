<?php
$cookie_name="Admin";
$cookie_value="Visited";
setcookie($cookie_name, $cookie_value,time() + 86400, "/");

if(isset($_COOKIE[$cookie_name])) {
    echo "Welcome again ".$cookie_name;
  }
  else {  
    echo "Welcome ".$cookie_name;	  
}
?>