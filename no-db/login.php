<?php
$username = $_POST['username'];
$password = $_POST['password'];

$correct_username = "admin";
$correct_password = "$2y$10$8JAOF/LkT/beaX7Wr8zxn.7miv.D5AAU0H.ykKkha3b/pOfp1.3um";

if (password_verify($password, $correct_password)) {
    echo "Login successful" . "<br>";
    echo "Username: " . $username . "<br>";
    echo "Password: " . $password . "<br>";
} else {
    echo "Login failed";
}