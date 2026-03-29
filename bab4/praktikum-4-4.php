<?php
$jurusan_it = [
    "teknik informatika", 
    "teknik komputer", 
    "ilmu komputer", 
    "sistem informasi", 
    "teknologi informasi", 
    "pendidikan teknologi informasi"
];

echo "Daftar Jurusan IT:<br>";
foreach ($jurusan_it as $jurusan) {
    echo "<li>" . $jurusan . "</li>";
}

echo "<br>";

$stok_barang = [
    "Laptop" => 15,
    "Mouse" => 50,
    "Keyboard" => 30,
    "Monitor" => 20
];

echo "Data Stok Barang:<br>";
foreach ($stok_barang as $nama_barang => $jumlah) {
    echo "<li>Barang: " . $nama_barang . ", Stok: " . $jumlah . " unit</li>";
}