<?php
$username = $_POST['username'];
$password = $_POST['password'];

$db = new SQLite3('users.db');

// SELECT * FROM users WHERE username = $username
$result = $db->query("SELECT * FROM users WHERE username = '$username'");

$fetched_password = $result->fetchArray()[2];

if (password_verify($password, $fetched_password)) {
    echo "Login successful" . "<br>";
    echo "Username: " . $username . "<br>";
    echo "Password: " . $password . "<br>";
} else {
    echo "Login failed";
}