<?php

class BankAccount {
    public $pemilik;      
    private $saldo;       

    public function __construct($pemilik, $saldoAwal) {
        $this->pemilik = $pemilik;
        $this->saldo   = $saldoAwal;
    }
    
    public function deposit($jumlah) {
        $this->saldo += $jumlah;
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

$akun = new BankAccount("Andi", 100000);

$akun->deposit(50000);

echo "Saldo akhir: " . $akun->getSaldo();

?>