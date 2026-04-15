<?php
session_start();
require 'user.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (array_key_exists($username, $users) && $password == $users[$username]["password"]) {
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        $_SESSION["role"] = $users[$username]["role"];
        
        header("location: dashboard.php"); 
        exit;
    } else {
        echo "<h3>Username atau password salah!</h3>";
        echo "<a href='login.php'>Kembali ke Halaman Login</a>";
    }
}
?>