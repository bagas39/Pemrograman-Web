<?php
$file = "data.txt";

if (file_exists($file)) {
    $isi_teks = file_get_contents($file);
    echo "<b>Isi file menggunakan file_get_contents():</b><br><br>";
    echo nl2br($isi_teks);
} else {
    echo "File $file tidak ditemukan.";
}
?>