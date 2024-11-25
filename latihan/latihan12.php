<?PHP
echo"<center><h2>Menghitung Bangun Datar</h2></center><br>";

function persegi($sisi){
    echo"Sisinya : $sisi <br>";
    $luas = $sisi * $sisi;
    echo"L = sisi x sisi <br>";
    echo"Jadi hasil luasnya adalah:<b><i>$luas</i></b> <hr>";
}

function persegi_panjang($panjang,$lebar){
    $luas = $panjang * $lebar;
    echo"panjangnya : $panjang <br>";
    echo"Lebarnya: $lebar<br>";
    echo"L = panjang x lebar <br>";
    echo"jadi hasil luasnya adalah: <b><i>$luas</i></b> <hr>";
  
}

 function segitiga($setengah,$alas,$tinggi){

    $luas = $setengah * $alas * $tinggi;
      echo"alasnyanya : $alas <br>";
      echo"tingginya: $tinggi<br>";
      echo" L = 1/5 x alas x tinggi <br>";
      echo"jadi hasil luasnya adalah: <b><i>$luas</i></b> <hr>";    
 }

 function lingkaran($phi,$r){
  $luas = $phi* $r;
  echo"π: $phi<br>";
  echo"Jari-Jari: $r<br>";
  echo"L = phi x jari2 <br>";
  echo"jadi hasil luasnya adalah: <b><i>$luas</i></b> <hr>"; }



    echo"<b>Menghitung Luas Persegi<br><br></b>";
    persegi(5);

    echo"<b>Menghitung Luas Persegi Panjang<br><br></b>";
    persegi_panjang(10,15);

    echo"<b>Menghitung Luas Segitiga<br><br></b>";
    segitiga(0.5,5,20);

    echo"<b>Menghitung Luas Lingkaran<br><br></b>";
    lingkaran(3.14,10);

?>