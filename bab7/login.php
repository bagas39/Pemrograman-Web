<!DOCTYPE html>
<html>
<head>
    <title>Login Sistem</title>
</head>
<body>
    <h2>Form Login</h2>
    <form action="proses_login.php" method="POST">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
    <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
</body>
</html>