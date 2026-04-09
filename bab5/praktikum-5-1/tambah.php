<?php
$file = "catatan.txt";
$isi_tambahan = "Ini adalah teks tambahan (append) menggunakan fungsi fwrite().\n";

$handle = fopen($file, "a");

if ($handle) {
    fwrite($handle, $isi_tambahan);
    fclose($handle);
    echo "Data berhasil ditambahkan (append) ke dalam file $file.";
} else {
    echo "Gagal membuka file.";
}
?>