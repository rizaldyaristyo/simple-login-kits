<?php
session_start();

if (isset($_POST["user"]) && !isset($_SESSION["user"])) {
   $users = [
    "user1" => '$2y$10$.Z3vp2acNfFewSdFDgkouefgsduy1RGIKTw90mR/jz7yCbgj01RgS',
    "user2" => '$2y$10$hYdo5.sE52rbN5cRTdwAfeZWiLMG1I90T/VJDJFzwUnK55nauDHM2',
    "user3" => '$2y$10$b3K717W4YBBT6mu5jabDt.bmGJJiYGeRnv6Iv1LgkAu1ARQCTQPNK'
  ];
  if (isset($users[$_POST["user"]])) {
    if (password_verify($_POST["password"], $users[$_POST["user"]])) {
      $_SESSION["user"] = $_POST["user"];
    }
  }
  if (!isset($_SESSION["user"])) { $failed = true; }
}
if (isset($_SESSION["user"])) {
  header("Location: index.php");
  exit();
} ?>