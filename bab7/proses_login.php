<?php
session_start();
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    try {
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $user);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($data && password_verify($pass, $data['password'])) {
            $_SESSION['user_id'] = $data['id'];
            $_SESSION['username'] = $data['username'];
            header("Location: dashboard.php");
            exit;
        } else {
            echo "<script>alert('Username atau password salah!'); window.history.back();</script>";
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>