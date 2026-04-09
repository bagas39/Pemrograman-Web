<?php
$file = "data.txt";

if (file_exists($file)) {
    $handle = fopen($file, "r");
    
    echo "<b>Isi file menggunakan fgets():</b><br><br>";
    if ($handle) {
        while (($baris = fgets($handle)) !== false) {
            echo $baris . "<br>";
        }
        fclose($handle);
    }
} else {
    echo "File $file tidak ditemukan.";
}
?>