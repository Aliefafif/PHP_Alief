<?php
$tb = 164;
$bb = 70;

$keterangan = ($tb >= 165 && $bb <= 75) ? "Lolos" : "Tidak Lolos";

echo"Tinggi Badan : $tb<br>";
echo"Berat  Badan : $bb<br>";
echo"Hasil Seleksi Tahap Satu: $keterangan<br>";