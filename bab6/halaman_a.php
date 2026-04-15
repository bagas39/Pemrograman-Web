<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["role"] != "admin") {
    echo "<h2>Akses Ditolak!</h2>";
    echo "<p>Halaman A hanya dapat diakses oleh Admin.</p>";
    echo "<a href='dashboard.php'>Kembali ke Dashboard</a>";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head><title>Halaman A</title></head>
<body>
    <h2>Halaman A</h2>
    <p>Ini adalah halaman yang hanya bisa dilihat oleh Admin.</p>
    <a href="dashboard.php">Kembali ke Dashboard</a>
</body>
</html>