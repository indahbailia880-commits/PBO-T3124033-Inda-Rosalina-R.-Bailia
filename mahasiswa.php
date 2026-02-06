<?php

class Mahasiswa
{
    // Menggunakan Constructor agar pengisian data lebih praktis
    public function __construct(
        public $nim,
        public $nama,
        public $prodi
    ) {}

    // Method untuk menyapa
    public function sayHello()
    {
        return "Halo, nama saya <b>$this->nama</b> dengan NIM <b>$this->nim</b>. " .
               "Saya dari prodi <b>$this->prodi</b>.";
    }
}

// Membuat object jadi lebih singkat (1 baris saja)
$mahasiswa1 = new Mahasiswa("T310001", "Andi", "Teknik Informatika");
$mahasiswa2 = new Mahasiswa("T310002", "Budi", "Sistem Informasi");

echo "<h3>Daftar Mahasiswa</h3>";
echo "--------------------------<br>";
echo $mahasiswa1->sayHello() . "<br>";
echo $mahasiswa2->sayHello();
