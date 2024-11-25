<?php

$nama ="Muhammad Alief Afif Abdurrahman";
$kelas ="XI RPL 2";
$Jenis_kelamin ="Lanang";

$mtk = 89;
$indo = 77;
$inggris = 75;
$produktif = 93;

$rata = $mtk + $indo + $inggris + $produktif;
$rata2 = $rata / 4;

echo "<center><h2><i>Rapot Bulanan</i></h2></center><br>";

// Tabel Data Siswa
echo "<table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; width: 50%; margin: auto;'>";
echo "<tr><th colspan='2'>Data Siswa</th></tr>";
echo "<tr><td>Nama</td><td>$nama</td></tr>";
echo "<tr><td>Kelas</td><td>$kelas</td></tr>";
echo "<tr><td>Jenis Kelamin</td><td>$Jenis_kelamin</td></tr>";
echo "</table><br>";

// Tabel Nilai
echo "<table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; width: 50%; margin: auto;'>";
echo "<tr><th>Mata Pelajaran</th><th>Nilai</th></tr>";
echo "<tr><td>Matematika</td><td>$mtk</td></tr>";
echo "<tr><td>Bahasa Indonesia</td><td>$indo</td></tr>";
echo "<tr><td>Bahasa Inggris</td><td>$inggris</td></tr>";
echo "<tr><td>Produktif</td><td>$produktif</td></tr>";
echo "</table><br>";

// Tabel Rata-Rata
echo "<table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; width: 50%; margin: auto;'>";
echo "<tr><td>Nilai Rata-Rata</td><td>$rata2</td></tr>";
echo "</table>";

// Penentuan Kelulusan
echo "<table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; width: 50%; margin: auto;'>";
if ($rata2 >= 80) {
    echo "<tr><td>Keterangan: <strong>Selamat, Anda Lulus!</strong></td></tr>";
} else {
    echo "<tr><td>Keterangan: <strong>Maaf, Anda Tidak Lulus.</strong></td></tr>";
}
echo "</table><br>";
?>


<?php

// makanan
$seblak = 10000;
$pentol = 15000;
$batagor = 20000;
// minuman
$thai_tea = 5000;
$mixue = 7000;
$kopi = 12000;

//pengisian
$nama="parman";
$j_k="laki-laki";
$tngl="02-oktober-2024";
$jumlah = "3";
$harga ="$mixue";
$menu ="mixue";

$jenis = "minuman";
$total = $harga * $jumlah;
$diskon = $total * 0.1;
$bayar = $total - $diskon;

echo "<table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; width: 50%; margin: auto;'>";
echo "<tr><th colspan='2'>Jual Beli </th></tr><br>";
echo "<tr><td>Nama </td><td> $nama </td></tr><br>";
echo "<tr><td>Jenis kelamin </td><td> $j_k </tr></td><br>";
echo "<tr><td>tanggal beli </td><td> $tngl </tr></td><br>";
echo "<tr><td>jenis </td><td> $jenis </tr></td><br>";
echo "<tr><td>menu </td><td> $menu</tr></td><br>";
echo "<tr><td>harga </td><td> $harga</tr></td><br>";
echo "<tr><td>jumlah </td><td> $jumlah</tr></td>";

echo "<tr><td>total</td> <td> $total</td></tr> <br>";

if ($total >= 50000) {
    echo "<tr><td> anda mendapatkan diskon sebesar <td>10000 <br></td></tr> 
    <td> total yang harus anda bayar </td><td> $bayar</td></tr>";
} else {
    echo "<tr><td>maaf anda tidak mendapatkan diskon  0 </td></tr><br> 
total bayar<td>$total</td></tr>";
}

echo "</table><br>";

?>