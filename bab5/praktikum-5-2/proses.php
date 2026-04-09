<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"]);
    $nim = htmlspecialchars($_POST["nim"]);
    $email = htmlspecialchars($_POST["email"]);

    $data_mahasiswa = "Nama: $nama, NIM: $nim, Email: $email\n";
    
    $file = "data_mahasiswa.txt";

    $handle = fopen($file, "a");
    if ($handle) {
        fwrite($handle, $data_mahasiswa);
        fclose($handle);
        echo "<b>Sukses!</b> Data berikut telah disimpan ke $file:<br><br>";
        echo "Nama: " . $nama . "<br>";
        echo "NIM: " . $nim . "<br>";
        echo "Email: " . $email . "<br>";
    } else {
        echo "Terjadi kesalahan saat menyimpan data ke file.";
    }
} else {
    echo "Gagal. Harap akses halaman ini melalui submit form.";
}
?>