<?php

// ini Vclass
class produk {

    //Ini Property
   public $judul ,
          $penerbit,
          $harga,
          $pembuat;

    //ini constructor
     public function __construct($judul ,$penerbit,$harga,$pembuat) {
        $this->judul =$judul ;
        $this->penerbit = $penerbit;
        $this->harga =$harga;
        $this->pembuat =$pembuat;
     }

    //Ini Method
     public function hello() {
     return "$this->judul,$this->penerbit,$this->harga,$this->pembuat";
          }

}

// instansiasi /objek
$produk1 = new produk ("naruto","Alif",30000,"achenk");
$produk2 = new produk ("Mobile Legend","Monton",9000,"yuyun");


    echo "Komik :" . $produk1->hello();
    echo"<br>";
    echo "Game :" .$produk2->hello();
    ?>