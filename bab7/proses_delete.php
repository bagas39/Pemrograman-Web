<?php
session_start();
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_user = $_SESSION['user_id'];

    try {
        $stmt = $conn->prepare("DELETE FROM users WHERE id = :id");
        $stmt->bindParam(':id', $id_user);
        $stmt->execute();

        session_destroy();
        echo "<script>alert('Akun Anda telah berhasil dihapus.'); window.location='register.php';</script>";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>