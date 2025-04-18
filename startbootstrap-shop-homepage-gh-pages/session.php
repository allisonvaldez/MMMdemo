<?php
// Begin the session
session_start();

// Control if the user is already logged in, if so redirect to the welcome page
if (isset($_SESSION["userid"]) && $_SESSION["userid"] == true) {
    header("location: welcome.php");
    exit;
}
?>