<?php
session_start();
session_unset(); // Remove all session variables
session_destroy(); // Destroy the session
header("Location: ../../admin/admin-login.html"); // Redirect to login page
exit;
?>