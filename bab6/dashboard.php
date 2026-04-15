<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head><title>Dashboard</title></head>
<body>
    <h2>Dashboard Utama</h2>
    <p>Selamat datang, <b><?php echo $_SESSION["username"]; ?></b>! Anda login sebagai <b><?php echo $_SESSION["role"]; ?></b>.</p>
    <hr>
    <h3>Menu Navigasi</h3>
    <ul>
        <li><a href="halaman_a.php">Halaman A (Khusus Admin)</a></li>
        <li><a href="halaman_b.php">Halaman B (Khusus Admin & Member)</a></li>
        <li><a href="halaman_c.php">Halaman C (Publik)</a></li>
    </ul>
    <br>
    <a href="logout.php"><button>Logout</button></a>
</body>
</html>