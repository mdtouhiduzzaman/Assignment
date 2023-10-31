<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Validate and save user data to a file
    $user_data = "$username|$email|$password\n";
    file_put_contents('users.txt', $user_data, FILE_APPEND);
    
    header('Location: login.php');
}
?>
