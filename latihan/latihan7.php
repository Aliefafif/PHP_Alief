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
            <h2>Form Data Diri</h2>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama_lengkap" value=""></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><input type="text" name="tempat_lahir" value=""></td>
                </tr>
                <tr>
                    <td>Tanggal lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal_lahir" value=""></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-Laki <input type="radio" value="perempuan">perempuan</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" id=""></textarea></td>
                </tr>
                <tr>
                    <td>agama</td>
                    <td>:</td>
                    <td><select name="agama" id="">
                        <option value="islam">Islam</option>
                        <option value="kristen">kristen</option>
                        <option value="katholik">katholik</option>

                    </select></td>
                </tr>
                <tr>
                    <td>pendidikan tarakhir</td>
                    <td>:</td>
                    <td><select name="pendidikan" id="">
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>

                    </select></td>
                </tr>
                <tr>
                    <td>status</td>
                    <td>:</td>
                    <td><select name="status" id="">
                        <option value="sudah menikah">sudah menikah</option>
                        <option value="belum menikah">belum menikah</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td><input type="checkbox" name="hobi" value="Membaca">Membaca 
                    <input type="checkbox" value="Menulis">Menulis 
                    <input type="checkbox" value="Ngepush">Ngepush</td>
                </tr>
                <tr>
                    <td>Cita-Cita</td>
                    <td>:</td>
                    <td><select name="cita-cita" id="">
                        <option value="programer">Programer</option>
                        <option value="pemain bola">pemain bola</option>
                        <option value="softex">Jadi Softex</option>
                        <option value="Ustad">Ustad</option>
                    </select></td>  
                              </tr>
                <tr>
                    <td>Kata-Kata Bijak</td>
                    <td>:</td>
                    <td><textarea name="kata" id=""></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="kirim" value="Kirim"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
<?php
if (isset($_POST['kirim'])) {
    $nama_lengkap2 = $_POST['nama_lengkap'];
    $tempat_lahir2 = $_POST['tempat_lahir'];
    $tanggal_lahir2 = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $pendidikan = $_POST['pendidikan'];
    $status = $_POST['status'];
    $hobi = $_POST['hobi'];
    $cita_cita = $_POST['cita-cita'];
    $kata_kata_bijak = $_POST['kata'];

    echo "<center><table style='border-spacing: 10px; text-align: left;'>";
    echo "<tr><td>Nama Lengkap</td><td>:</td><td>$nama_lengkap2</td></tr>";
    echo "<tr><td>Tempat Lahir</td><td>:</td><td>$tempat_lahir2</td></tr>";
    echo "<tr><td>Tanggal Lahir</td><td>:</td><td>$tanggal_lahir2</td></tr>";
    echo "<tr><td>Jenis Kelamin</td><td>:</td><td>$jenis_kelamin</td></tr>";
    echo "<tr><td>Alamat</td><td>:</td><td>$alamat</td></tr>";
    echo "<tr><td>Agama</td><td>:</td><td>$agama</td></tr>";
    echo "<tr><td>Pendidikan Terakhir</td><td>:</td><td>$pendidikan</td></tr>";
    echo "<tr><td>Status</td><td>:</td><td>$status</td></tr>";
    echo "<tr><td>Hobi</td><td>:</td><td>$hobi</td></tr>";
    echo "<tr><td>Cita-Cita</td><td>:</td><td>$cita_cita</td></tr>";
    echo "<tr><td>Kata-Kata Bijak</td><td>:</td><td>$kata_kata_bijak</td></tr>";
    echo "</table></center>";
}
?>
