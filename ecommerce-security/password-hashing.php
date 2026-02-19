<?php

$password = "SecurePassword123!";

// Hash password securely
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

echo "Hashed Password:<br>";
echo $hashedPassword;

// Verify password
if (password_verify("SecurePassword123!", $hashedPassword)) {
    echo "<br><br>Password Verified Successfully.";
}
