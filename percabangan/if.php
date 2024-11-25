<?php
// Menentukan jabatan dan gaji dasar dengan switch-case
$jabatan = "Programmer Senior";
switch ($jabatan) {
    case "Programmer Junior":
        $gaji_dasar = 6000000; // Gaji Rp6.000.000
        break;
    case "Programmer Senior":
        $gaji_dasar = 10000000; // Gaji Rp10.000.000
        break;
    case "Project Manager":
        $gaji_dasar = 15000000; // Gaji Rp15.000.000
        break;
    default:
        $gaji_dasar = 0;
        echo "Jabatan tidak dikenali.";
        exit();
}

// Menentukan tunjangan kehadiran menggunakan ternary operator
$hadir_penuh = true; // True jika tidak pernah absen, False jika pernah absen
$tunjangan_kehadiran = $hadir_penuh ? 200000 : 0;

// Menentukan bonus kinerja berdasarkan performa dengan ternary operator
$nilai_performa = 85; // Nilai performa (bisa diubah)
$bonus_kinerja = $nilai_performa >= 90 ? 0.10 * $gaji_dasar : ($nilai_performa >= 75 ? 0.05 * $gaji_dasar : 0);

// Menghitung total gaji sebelum pajak
$total_gaji_sebelum_pajak = $gaji_dasar + $tunjangan_kehadiran + $bonus_kinerja;

// Menghitung pajak penghasilan (5%) dengan ternary
$pajak_penghasilan = 0.05 * $total_gaji_sebelum_pajak;

// Menghitung total gaji bersih
$total_gaji_bersih = $total_gaji_sebelum_pajak - $pajak_penghasilan;

// Menampilkan hasil perhitungan
echo "Jabatan: $jabatan\n<br>";
echo "Gaji Dasar: Rp" . number_format($gaji_dasar, 0, ',', '.') . "\n<br>";
echo "Tunjangan Kehadiran: Rp" . number_format($tunjangan_kehadiran, 0, ',', '.') . "\n<br>";
echo "Bonus Kinerja: Rp" . number_format($bonus_kinerja, 0, ',', '.') . "\n<br>";
echo "Total Gaji Sebelum Pajak: Rp" . number_format($total_gaji_sebelum_pajak, 0, ',', '.') . "\n<br>";
echo "Pajak Penghasilan (5%): Rp" . number_format($pajak_penghasilan, 0, ',', '.') . "\n<br>";
echo "Total Gaji Bersih: Rp" . number_format($total_gaji_bersih, 0, ',','.')."\n<br>";
?>