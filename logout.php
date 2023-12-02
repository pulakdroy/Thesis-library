<?php
// logout.php

// Start or resume the session
session_start();

// Destroy the session
session_destroy();

// Redirect to the login page or any other desired page
header("Location: landing.php");
exit();
?>
