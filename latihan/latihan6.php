<?php
$jabatan = "Programmer Senior";
switch ($jabatan) {
    case "Programmer Junior":
        $gaji_dasar = 6000000; 
        break;
    case "Programmer Senior":
        $gaji_dasar = 10000000; 
        break;
    case "Project Manager":
        $gaji_dasar = 15000000; 
        break;
    default:
        $gaji_dasar = 0;
        echo "Jabatan tidak dikenali.";
        exit();
}

$hadir_penuh = true; 
$tunjangan_kehadiran = $hadir_penuh ? 200000 : 0;

$nilai_performa = 85; 

if ($nilai_performa > 90) {
    $bonus = $gaji_dasar * 0.1;
}elseif ($nilai_performa >= 75 && $nilai_performa <= 90) {
    $bonus=$gaji_dasar *0.05;
}else {
    $bonus =0;
}

$total_gaji_sebelum_pajak = $gaji_dasar + $tunjangan_kehadiran + $bonus;

$pajak_penghasilan = 0.05 * $total_gaji_sebelum_pajak;

$total_gaji_bersih = $total_gaji_sebelum_pajak - $pajak_penghasilan;

echo "Jabatan: $jabatan\n<br>";
echo "Gaji Dasar: Rp" . number_format($gaji_dasar, 0, ',', '.') . "\n<br>";
echo "Tunjangan Kehadiran: Rp" . number_format($tunjangan_kehadiran, 0, ',', '.') . "\n<br>";
echo "Bonus Kinerja: Rp" . number_format($bonus, 0, ',', '.') . "\n<br>";
echo "Total Gaji Sebelum Pajak: Rp" . number_format($total_gaji_sebelum_pajak, 0, ',', '.') . "\n<br>";
echo "Pajak Penghasilan (5%): Rp" . number_format($pajak_penghasilan, 0, ',', '.') . "\n<br>";
echo "Total Gaji Bersih: Rp" . number_format($total_gaji_bersih, 0, ',','.')."\n<br>";
?>