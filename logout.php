<?php

//start session

//Commented this out because the links do not work when it is there
//session_start();



//unset all of the session variables

$_SESSION = array();



//terminate session

session_destroy();



//take user to login page

header("location: finalhtml.php");

exit;



?>
