<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    echo "<h2>Akses Ditolak!</h2>";
    echo "<p>Halaman B hanya dapat diakses oleh pengguna yang sudah login (Admin/Member).</p>";
    echo "<a href='login.php'>Silakan Login</a>";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head><title>Halaman B</title></head>
<body>
    <h2>Halaman B</h2>
    <p>Ini adalah halaman yang bisa dilihat oleh Admin maupun Member.</p>
    <a href="dashboard.php">Kembali ke Dashboard</a>
</body>
</html>