<?php
session_start();
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_username = $_POST['new_username'];
    $id_user = $_SESSION['user_id'];

    try {
        $stmt = $conn->prepare("UPDATE users SET username = :username WHERE id = :id");
        $stmt->bindParam(':username', $new_username);
        $stmt->bindParam(':id', $id_user);
        $stmt->execute();
        
        $_SESSION['username'] = $new_username;
        
        echo "<script>alert('Profil berhasil diperbarui!'); window.location='dashboard.php';</script>";
    } catch(PDOException $e) {
        echo "<script>alert('Gagal update. Username mungkin sudah dipakai.'); window.history.back();</script>";
    }
}
?>