<?php

class bangundatar{

    var $luas;
    
   public function persegi($sisi){
        echo"Sisinya : $sisi <br>";
        $this->luas = $sisi * $sisi;
        echo"L = sisi x sisi <br>";
        echo"Jadi hasil luasnya adalah:<b><i>$this->luas</i></b> <hr>";
}
    public function persegi_panjang($panjang,$lebar){
    $this->luas = $panjang * $lebar;
    echo"panjangnya : $panjang <br>";
    echo"Lebarnya: $lebar<br>";
    echo"L = panjang x lebar <br>";
    echo"jadi hasil luasnya adalah: <b><i>$this->luas</i></b> <hr>";
}
    public function segitiga($setengah,$alas,$tinggi){

      $this->luas = $setengah * $alas * $tinggi;
      echo"alasnyanya : $alas <br>";
      echo"tingginya: $tinggi<br>";
      echo" L = 1/5 x alas x tinggi <br>";
      echo"jadi hasil luasnya adalah: <b><i>$this->luas</i></b> <hr>";    
 }

    public function lingkaran($phi,$r){
    $this->luas = $phi* $r;
    echo"π: $phi<br>";
    echo"Jari-Jari: $r<br>";
    echo"L = phi x jari2 <br>";
    echo"jadi hasil luasnya adalah: <b><i>$this->luas</i></b> <hr>"; }
  
}
$cetak = new bangundatar();
echo"<h3>Ini Persegi</h3>";
echo $cetak->persegi(5);


echo"<h3>Ini Persegi Panjang</h3>";
echo $cetak->persegi_panjang(3,6);


echo"<h3>Ini segitiga</h3>";
echo $cetak->segitiga(0.5,5,20);


echo"<h3>Ini  lingkaran</h3>";
echo $cetak->lingkaran(3.14,10);
