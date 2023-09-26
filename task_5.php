<?php
function generatePassword($length) {
    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numberChars = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    $allChars = $lowercaseChars . $uppercaseChars . $numberChars . $specialChars;

    $password = '';

    // Generate the password
    for ($i = 0; $i < $length; $i++) {
        $randomChar = $allChars[rand(0, strlen($allChars) - 1)];
        $password .= $randomChar;
    }

    return $password;
}

// Generate a password with a length of 12 characters
$password = generatePassword(12);

echo "Generated Password: $password\n";