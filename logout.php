<?php session_start();

$_SESSION = array();
session_unset();
session_destroy();

//redirect to the login page using php built-in header method
header("Location:login.php");
