<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Read user data from the file and validate credentials
    $users = file('users.txt', FILE_IGNORE_NEW_LINES);
    foreach ($users as $user) {
        list($username, $storedEmail, $storedPassword) = explode('|', $user);
        if ($email === $storedEmail && password_verify($password, $storedPassword)) {
            $_SESSION['email'] = $email;
            // Redirect to different pages based on user role
            if ($email === 'admin@example.com') {
                header('Location: admin_dashboard.php');
            } else {
                header('Location: user_dashboard.php');
            }
        
        }
    }
    echo "Invalid Login. Please try again.";
}