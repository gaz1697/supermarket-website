<?php
session_start();

//destroy the session
session_destroy();

//redirect the user back to the login page
header("Location: login.php");
exit;
?>
