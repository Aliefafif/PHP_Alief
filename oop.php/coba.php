<?php

// ini Vclass
class produk {

    //Ini Property
   public $Judul ,
          $Penerbit,
          $harga;

          //Ini Method
          public function hello() {
            return "$this->judul,$this->penerbit,$this->harga ";
          }

}

// instansiasi /objek
$produk1 = new produk ();
$produk1->judul="Naruto";
$produk1->penerbit ="sera";
$produk1->harga ="20000";

$produk2 = new produk ();
$produk2->judul="Mobile Legend";
$produk2->penerbit ="Mntoon";
$produk2->harga ="3000000";


    echo "Komik :" . $produk1->hello();
    echo"<br>";
    echo "Game :" .$produk2->hello();

     

// echo "Judul: $produk1->judul, Penerbit: $produk1->penerbit, Harga: $produk1->harga";
