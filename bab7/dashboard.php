<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Selamat Datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p>Ini adalah halaman dashboard utama Anda.</p>

    <ul>
        <li><a href="edit_profile.php">Ubah Profil</a></li>
        <li>
            <form action="proses_delete.php" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus akun ini secara permanen?');" style="display:inline;">
                <button type="submit" style="color:red;">Hapus Akun</button>
            </form>
        </li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>