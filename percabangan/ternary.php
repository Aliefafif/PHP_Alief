<?php 

$years =date("Y");

//ternary
$kabisat = $years % 4 == 0 ? 'kabisat' : "Bukan Kabisat";

echo "$years itu tahun $kabisat<br>";

$umur = 9;
$status = $umur <= 8 ? 'sudah dewasa' : 'belum dewasa';
echo"usia anda adalah : $umur <br>";
echo"umur anda $status";
?>

