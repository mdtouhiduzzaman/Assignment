<?php
session_start();

if (!isset($_SESSION['email']) || $_SESSION['email'] !== 'admin@example.com') {
    header('Location: login.php');

}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $roleName = $_POST['role_name'];

    // Save the role to a file or database
    // For example, you can append it to a roles.txt file
    file_put_contents('users.txt', $roleName . PHP_EOL, FILE_APPEND);
}