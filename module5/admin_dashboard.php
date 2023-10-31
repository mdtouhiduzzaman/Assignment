<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: login.php');
   
}

if ($_SESSION['email'] !== 'admin@example.com') {
    // Redirect to an unauthorized page or display an error message.
    echo "You do not have permission to access this page.";
   
}


