<?php
$username = $_POST['username'];
$password = $_POST['password'];

$db = new SQLite3('users.db');

$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

$stmt = $db->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
$stmt->bindValue(":username", $username);
$stmt->bindValue(":password", $hashedPassword);

$result = $stmt->execute();

if ($result) {
    echo "Registration successful" . "<br>";
    echo "Username: " . $username . "<br>";
    echo "Password: " . $password . "<br>";
} else {
    echo "Registration failed";
}