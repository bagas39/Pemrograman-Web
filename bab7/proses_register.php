<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

    try {
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        $stmt->bindParam(':username', $user); 
        $stmt->bindParam(':password', $pass); 
        $stmt->execute(); 
        
        echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location='login.php';</script>";
    } catch(PDOException $e) {
        echo "<script>alert('Error: Username mungkin sudah digunakan.'); window.history.back();</script>";
    }
}
?>