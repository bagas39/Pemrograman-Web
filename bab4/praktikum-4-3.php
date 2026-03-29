<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $prodi;


    public function __construct($nama, $nim, $prodi) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->prodi = $prodi;
    }

    public function kuliah() {
        return $this->nama . " sedang kuliah di program studi " . $this->prodi . ".";
    }

    public function ujian(){
        return $this->nama . " sedang ujian.";
    }

    public function praktikum(){
        return $this->nama . " sedang praktikum.";
    }   
}

$mhs1 = new Mahasiswa("Andi", "123456", "Teknik Informatika");
$mhs2 = new Mahasiswa("Budi", "654321", "Sistem Informasi");

echo "Aktivitas Mahasiswa1:<br>";
echo $mhs1->kuliah() . "<br>";
echo $mhs1->ujian() . "<br>";
echo $mhs1->praktikum() . "<br>";
echo "<br>Aktivitas Mahasiswa2:<br>";
echo $mhs2->kuliah() . "<br>";
echo $mhs2->ujian() . "<br>";
echo $mhs2->praktikum() . "<br>";
