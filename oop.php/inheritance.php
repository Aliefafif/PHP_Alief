<?php
//class utama
class kendaraan{

    protected $warna ="putih";
    public $merk;
}
//class keturunan
//extends adalah keturunan atau sifat dari class induk
class mobil extends kendaraan{

    public $nama ="Supra mk 10000";

    public function deskripsi(){
        echo"warna mobil :$this->warna<br>";
        echo"Nama :$this->nama<hr>";
    }

    public function ngaran(){
        echo"warna motor ini adalah $this->warna<br>";
    }

}

   

$bebas = new mobil();
echo $bebas->deskripsi();

echo $bebas->ngaran();