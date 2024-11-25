<?php

$nama ="Muhammad Alief Afif Abdurrahman";
$kelas ="XI RPL 2";
$Jenis_kelamin ="Lanang";

$mtk =95;
$indo =100;
$inggris =85;
$produktif =83;

$rata =$mtk + $indo + $inggris + $produktif;
$rata2 = $rata / 4;
echo"<center><h2><i>Rapot Bulanan</i></h2></center><br><br>";
echo"nama :$nama <br>";
echo"nama :$kelas <br>";
echo"nama :$Jenis_kelamin <br><br><hr>";
echo"Nilai Matematika :$mtk <br>";
echo"Nilai B.indonesia :$indo<br>";
echo"Nilai B.Inggris :$inggris<br>";
echo"Nilai Produktif :$produktif<br><br><hr>";


echo"Nilai Rata-Rata :$rata2 <br>";
if ($rata2 >= 80){
    echo "selamat Anda Lulus";
}else{
    echo"Maaf Anda Tidak Lulus";
}
?>