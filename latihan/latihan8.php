<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="" method="post">
            <h2><b>Nilai Ujian Sekolah</b></h2>
            <table>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type="text" name="nama_lengkap" value=""></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas" value=""></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="jurusan" id="">
                        <option value="RPL">Rekayasa Perngkat Lunak</option>
                        <option value="TKRO">Teknik Kendaraan Ringan</option>
                        <option value="TBSM">Teknik Sepedah Motor</option>

                    </select></td>                
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><b>Masukan Nilai</b></td>
                </tr>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="nilai_harian" value="">40%</td>
                </tr>
                <tr>
                    <td>Nilai Sikap</td>
                    <td>:</td>
                    <td><input type="number" name="nilai_sikap" value="">20%</td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="number" name="nilai_uts" value="">20%</td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="number" name="nilai_uas" value="">20%</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="kirim" value="Proses"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php

if (isset($_POST['kirim'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $nilai_harian = $_POST['nilai_harian'];
    $nilai_sikap = $_POST['nilai_sikap'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];

    
    $rata2 =($nilai_harian * 0.4)+($nilai_sikap * 0.2)+($nilai_uts * 0.2)+($nilai_uas * 0.2); 

    
    echo "<center><table style='border-spacing: 10px; text-align: left;'>";
    echo "<tr><td>Nama Lengkap</td><td>:</td><td>$nama_lengkap</td></tr>";
    echo "<tr><td>Kelas</td><td>:</td><td>$kelas</td></tr>";
    echo "<tr><td>Jurusan</td><td>:</td><td>$jurusan</td></tr>";
    echo "<tr><td>Nilai Harian</td><td>:</td><td>$nilai_harian</td></tr>";
    echo "<tr><td>Nilai Sikap</td> <td>:</td><td>$nilai_sikap</td></tr>";
    echo "<tr><td>Nilai UTS</td><td>:</td><td>$nilai_uts</td></tr>";
    echo "<tr><td>Nilai UAS</td><td>:</td><td>$nilai_uas</td></tr>";
    echo"<tr><td>Nilai Rata-Rata</td> <td>:</td> <td>$rata2</td></tr> <br>";
    if ($rata2 > 75){
        echo "<tr><td>selamat Anda Lulus🫰🫰</td></tr>";
    }else{
        echo"<tr><td>Maaf Anda Tidak Lulus!!🤣🤣</td></tr>";
    }
    echo "</table></center>";

   
}
?>