<?php
$file = "catatan.txt";
$isi_baru = "Ini adalah teks yang ditulis menggunakan fungsi file_put_contents().\n";

file_put_contents($file, $isi_baru);

echo "Proses selesai.";
?>