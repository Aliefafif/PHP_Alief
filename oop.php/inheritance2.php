<?php

class bangun_datar{

    public $luas_persegi_panjang;
}

    class luas extends bangun_datar{

        public function persegi_panjang($panjang,$lebar){
            echo"<h3>Menghitung Luas Persegi Panjang</h3>";
            echo"panjang :$panjang <br>";
            echo"lebar :$lebar<br>";
            $this->luas_persegi_panjang = $panjang * $lebar ;
            echo"hasilnya adalah :  $this->luas_persegi_panjang ";
        }
    }
    $cetak =new luas();

    echo $cetak->persegi_panjang(10,5);