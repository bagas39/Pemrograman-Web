<?php
function hitungJumlah($angka1, $angka2) {
    return $angka1 + $angka2;
}

echo "Hasil penjumlahan 10 + 25 = " . hitungJumlah(10, 25) . "<br>";
echo "Hasil penjumlahan 100 + 50 = " . hitungJumlah(100, 50) . "<br>";

function hitungPanjangString($teks) {
    return strlen($teks);
}

echo "Panjang string 'Universitas' adalah: " . hitungPanjangString("Universitas") . " karakter.<br>";
echo "Panjang string 'Pemrograman PHP' adalah: " . hitungPanjangString("Pemrograman PHP") . " karakter.<br>";
