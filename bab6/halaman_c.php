<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Halaman C</title></head>
<body>
    <h2>Halaman C (Publik)</h2>
    <p>Halaman ini terbuka untuk semua orang, baik yang sudah login maupun belum (Tamu).</p>
    
    <?php
    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        echo "<p>Anda sedang login sebagai: <b>" . $_SESSION["username"] . "</b></p>";
        echo "<a href='dashboard.php'>Kembali ke Dashboard</a>";
    } else {
        echo "<p>Status Anda saat ini: <b>Tamu (Guest)</b></p>";
        echo "<a href='login.php'>Kembali ke Form Login</a>";
    }
    ?>
</body>
</html>