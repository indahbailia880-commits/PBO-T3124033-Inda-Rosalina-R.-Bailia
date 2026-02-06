<?php
class Mahasiswa {

    private $nim;
    private $nama;
    private $ipk;

   
    public function __construct($nim, $nama, $ipk) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->ipk = $ipk;
    }

    
    public function getStatus() {
        if ($this->ipk >= 3.0) {
            return "Baik";
        } else {
            return "Perlu bimbingan";
        }
    }

    
    public function getNim() {
        return $this->nim;
    }

    public function getNama() {
        return $this->nama;
    }
}

// Membuat minimal 2 object
$mahasiswa1 = new Mahasiswa("221001", "Indah", 3.5);
$mahasiswa2 = new Mahasiswa("221002", "Budi", 2.7);

// Menampilkan data
echo "Data Mahasiswa <br><br>";

echo "NIM: " . $mahasiswa1->getNim() . "<br>";
echo "Nama: " . $mahasiswa1->getNama() . "<br>";
echo "Status: " . $mahasiswa1->getStatus() . "<br><br>";

echo "NIM: " . $mahasiswa2->getNim() . "<br>";
echo "Nama: " . $mahasiswa2->getNama() . "<br>";
echo "Status: " . $mahasiswa2->getStatus() . "<br>";
?>