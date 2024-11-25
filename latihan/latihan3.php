<?php
// makanan
$seblak = 10000;
$pentol = 15000;
$batagor = 20000;
// minuman
$thai_tea = 5000;
$mixue = 7000;
$kopi = 12000;

$jumlah = "4";

$jenis = "makanan";
$total = $batagor * $jumlah;
$diskon = $total * 0.1;
$bayar = $total - $diskon;

echo "Nama : Adit <br>";
echo "Jenis kelamin : Laki laki <br>";
echo "tanggal beli : 2 oktober 2024 <br>";
echo "jenis : $jenis <br>";
echo "menu : batagor <br>";
echo "harga : $batagor <br>";
echo "jumlah : $jumlah <br>";
echo "------------------------------<br>";

echo "total : $total <br>";

if ($total >= 50000) {
    echo "diskon : 10000 <br>";
    echo"------------------------------<br>"; 
    echo "total bayar : $bayar";
} else {
    echo "diskon : 0 <br> <hr> total bayar : $total";
}

?>