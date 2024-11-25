<?php

//soal 1
$buku="Komik";
$genre="romance";

switch($buku){
    case 'Komik':
    $harga = 10000;
    echo"Jenis Buku :$buku<br>";
    echo"Harga Buku :$harga<br>";
    
    switch($genre){
     case 'comedy':
        echo"Genre Buku : comady<br>";
        $total = $harga * 0.15;
        $hasil = $harga - $total;
        echo"Genre Comady Dapat Diskon 15% <br> Diskon Anda :$total <br><br>";
        echo"Total Yang Harus Di Bayar :$hasil";
        break; 

     case 'romance':
        echo"Genre Buku : romance<br>";
        $total = $harga * 0.05;
        $hasil = $harga - $total;
        echo"Genre romance Dapat Diskon 10% <br> Diskon Anda :$total <br><br>";
        echo"Total Yang Harus Di Bayar :$hasil";
        break;
        
     case 'thiler':
        echo"Genre Buku : thiler<br>";
        $total = $harga * 0.1;
        $hasil = $harga - $total;
        echo"Genre thiler Dapat Diskon 5% <br> Diskon Anda :$total <br><br>";
        echo"Total Yang Harus Di Bayar :$hasil";
        break;

}
 break;
 echo"<h3>Buku Tidak Tersedia</h3>";
 break;
}

?>