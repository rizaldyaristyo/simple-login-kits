<?php
$username = $_POST['username'];
$password = $_POST['password'];

$db = new SQLite3('users.db');

$stmt = $db->prepare("SELECT * FROM users WHERE username = :username");
$stmt->bindValue(":username", $username);

$result = $stmt->execute();
// $fetched_password = "";
// while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
//     $fetched_password = $row["password"];
// }
$fetched_password = $result->fetchArray(SQLITE3_ASSOC)["password"];

if (password_verify($password, $fetched_password)) {
    echo "Login successful" . "<br>";
    echo "Username: " . $username . "<br>";
    echo "Password: " . $password . "<br>";
} else {
    echo "Login failed";
}