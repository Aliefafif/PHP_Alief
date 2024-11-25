<?php

// Pengisian variabel
$nama = "Rusdi";
$j_k = "laki-laki";
$tngl = "02-10-2024";
$jumlah = 7; // Diubah ke integer agar bisa digunakan untuk perhitungan
$menu = "kopi"; // Menu awal sebelum perubahan
$jenis = "makanan"; // Jenis awal
$harga = 20000; // Inisialisasi harga

// Logika penentuan harga berdasarkan jenis dan menu
if ($jenis == "makanan") {
    if ($menu == "seblak") {
        $harga = 10000;
    } else if ($menu == "Pentol") {
        $harga = 15000;
    } else if ($menu == "Batagor") {
        $harga = 20000;
    } else {
        echo "Jenis Makanan Tidak Ada<br>";
    }
} else if ($jenis == "minuman") {
    if ($menu == "Thai tea") {
        $harga = 10000;
    } else if ($menu == "Mixue") {
        $harga = 15000;
    } else if ($menu == "kopi") {
        $harga = 20000;
    } else {
        echo "Jenis Minuman Tidak Ada<br>";
    }
}

// Perhitungan total harga, diskon, dan yang harus dibayar
$total = $harga * $jumlah;
$diskon = ($total >= 50000) ? 10000 : 0; // Diskon diberikan jika total >= 50000
$bayar = $total - $diskon;

// Output informasi
echo "Nama: $nama <br>";
echo "Jenis kelamin: $j_k <br>";
echo "Tanggal beli: $tngl <br>";
echo "Jenis: $jenis <br>";
echo "Menu: $menu <br>";
echo "Harga: Rp" . number_format($harga, 0, ',', '.') . "<br>";
echo "Jumlah: $jumlah <br>";
echo "----------------------------------<br>";
echo "Total: Rp" . number_format($total, 0, ',', '.') . "<br>";

if ($total >= 50000) {
    echo "Anda mendapatkan diskon sebesar: Rp" . number_format($diskon, 0, ',', '.') . "<br>";
    echo "----------------------------------<br>";
    echo "Total yang harus Anda bayar: Rp" . number_format($bayar, 0, ',', '.') . "<br>";
} else {
    echo "Maaf, Anda tidak mendapatkan diskon<br>";
    echo "----------------------------------<br>";
    echo "Total bayar: Rp" . number_format($total, 0, ',', '.') . "<br>";
}

?>