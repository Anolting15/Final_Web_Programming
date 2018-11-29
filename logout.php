<?php
//start session
session_start();

//unset all of the session variables
$_SESSION = array();

//terminate session
session_destroy();

//take user to login page
header("location: login.php")
exit;

?>