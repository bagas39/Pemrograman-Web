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
    <title>Ubah Profil</title>
</head>
<body>
    <h2>Ubah Username</h2>
    <form action="proses_edit.php" method="POST">
        Username Baru: 
        <input type="text" name="new_username" value="<?php echo htmlspecialchars($_SESSION['username']); ?>" required><br><br>
        <button type="submit">Simpan Perubahan</button>
    </form>
    <br>
    <a href="dashboard.php">Kembali ke Dashboard</a>
</body>
</html>