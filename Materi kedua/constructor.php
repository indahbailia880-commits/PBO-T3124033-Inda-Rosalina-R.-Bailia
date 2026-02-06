<?php

class Fruit {
    public $name;

    
    public function __construct($name) {
        $this->name = $name;
    }

   
    public function __destruct() {
        echo "Pemanggilan destructor untuk buah: " . $this->name . " dihancurkan!<br>";
    }
}

$apple = [
    new Fruit("Apple"),
    new Fruit("Banana"),
    new Fruit("Mango")
];

foreach ($apple as $fruit) {
    echo "Fruit Name: " . $fruit->name . "<br>";
}

unset($apple);

?>

<?php
class Mahasiswa {
    public $nim;
    public $nama;
    public $prodi;

    public function __construct($nim, $nama, $prodi) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
    }

    public function getProfile() {
        return "[" . $this->nim . "] " . $this->nama . " - " . $this->prodi;
    }
}

$m1 = new Mahasiswa("TI22001", "Andi", "Teknik Informatika");

echo $m1->getProfile();
?>