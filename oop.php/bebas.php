<?php
class Mobil {
    // Properti
    public $merek;
    public $warna;
    public $kecepatanMaks;

    // Constructor
    public function __construct($merek, $warna, $kecepatanMaks) {
        $this->merek = $merek;
        $this->warna = $warna;
        $this->kecepatanMaks = $kecepatanMaks;
    }

    // Metode untuk menampilkan info mobil
    public function infoMobil() {
        return "Mobil merek $this->merek warna $this->warna dengan kecepatan maksimum $this->kecepatanMaks km/h.";
    }

    // Metode untuk menjalankan mobil
    public function jalankan($kecepatan) {
        return "Mobil melaju dengan kecepatan $kecepatan km/h.";
    }
}

// Objek 1
$mobil1 = new Mobil("Toyota", "merah", 180);
echo $mobil1->infoMobil();
echo "\n";
echo $mobil1->jalankan(60);

// Objek 2
$mobil2 = new Mobil("Honda", "biru", 200);
echo "\n";
echo $mobil2->infoMobil();
echo "\n";
echo $mobil2->jalankan(80);
?>
