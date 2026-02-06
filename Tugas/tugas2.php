<?php
// Membuat class Buku
class Buku {
    // private property
    private $judul;
    private $penulis;
    private $tahunTerbit;

    // constructor
    public function __construct($judul, $penulis, $tahunTerbit) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
    }

    // method getInfo
    public function getInfo() {
        return "Judul: " . $this->judul .
               ", Penulis: " . $this->penulis .
               ", Tahun: " . $this->tahunTerbit;
    }
}

// Membuat minimal 3 object Buku
$buku1 = new Buku("Pemrograman PHP", "Andi", 2021);
$buku2 = new Buku("Struktur Data", "Budi", 2020);
$buku3 = new Buku("Basis Data", "Citra", 2022);

// Menampilkan info masing-masing buku di browser
echo "<h3>Daftar Buku</h3>";

echo $buku1->getInfo() . "<br>";
echo $buku2->getInfo() . "<br>";
echo $buku3->getInfo() . "<br>";
?>