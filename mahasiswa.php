<?php

class Mahasiswa
{

    // property
    public $nim;
    public $nama;
    public $prodi;

    // method
    public function sayHello()
    {
        return "Hallo, nama saya " . $this->nama .
            " dengan NIM " . $this->nim .
            " saya adalah jurusan / prodi " . $this->prodi .
            " program.";
    }
}

// object mahasiswa 1
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nim   = "T310001";
$mahasiswa1->nama  = "Andi";
$mahasiswa1->prodi = "Teknik Informatika";

// object mahasiswa 2
$mahasiswa2 = new Mahasiswa();
$mahasiswa2->nim   = "T310002";
$mahasiswa2->nama  = "Budi";
$mahasiswa2->prodi = "Sistem Informasi";

echo "Daftar Mahasiswa <br>";
echo "---------------- <br>";
echo $mahasiswa1->sayHello() . "<br>";
echo $mahasiswa2->sayHello();
