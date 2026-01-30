<?php
class PersegiPanjang
{

    public $panjang;
    public $lebar;

    public function hitungluas()
    {
        return $this->panjang * $this->lebar;
    }

    public function hitungkeliling()
    {
        return 2 * ($this->panjang + $this->lebar);
    }
}

$pp1 = new PersegiPanjang();
$pp1->panjang = 10;
$pp1->lebar = 5;

$pp2 = new PersegiPanjang();
$pp2->panjang = 10;
$pp2->lebar = 5;

echo "<h3>Persegi Panjang 1</h3>";
echo "panjang: " . $pp1->panjang . "<br>";
echo "lebar: " . $pp1->lebar . "<br>";
echo "Luas: " . $pp1->hitungluas() . "<br>";
echo "Keliling: " . $pp1->hitungkeliling() . "<br>";

echo "<h3>Persegi Panjang 2</h3>";
echo "panjang: " . $pp2->panjang . "<br>";
echo "lebar: " . $pp2->lebar . "<br>";
echo "Luas: " . $pp2->hitungluas() . "<br>";
echo "Keliling: " . $pp2->hitungkeliling() . "<br>";
