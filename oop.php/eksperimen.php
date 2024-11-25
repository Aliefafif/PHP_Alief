<?php

class motor {

    public $merk,
           $warna,
           $harga;
           
           public function __construct($merk,$warna,$harga) {
            $this->merk =$merk;
            $this->warna =$warna;
            $this->harga =$harga ;
          }

          public function infomotor() {
            return "Motor Ini Bermerek $this->merk dan Berwarna $this->warna dengan Dengan harga $this->harga Rp";
        }

}

$mobil1 = new motor("CB150R", "merah", 20000000000);
echo $mobil1->infomotor();