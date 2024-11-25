<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Data Diri Calon Pendaftar</h2>
    <form action="" method="post">
        <table>
    <tr>
        <td>Jurusan</td>
        <td><select name="jurusan" id="">
        <option value="pilih">Pilih Jurusan</option>
        <option value="RPL">Rekayasa Perngkat Lunak</option>
        <option value="TKRO">Teknik Kendaraan Ringan</option>
        <option value="TBSM">Teknik Sepedah Motor</option>

        </select></td>                
        </tr>
        <tr>
            <td>Nama lengkap</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="radio" name="jenis" value="Laki-Laki" required>laki-laki
            <input type="radio" name="jenis" value="perempuan" reiquired>Perempuan</td>

        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><input type="text" name="tempat" required></td>
        </tr>

        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="date" name="tanggal" required></td>
        </tr>
        <tr>
            <td>Nomor Hp Siswa Yang bisa di hubungi</td>
            <td><input type="number" name="nomor" required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="kirim"  value="Kirim"></td>
        </tr>
        </table>
    </form>
    <hr>
</body>
</html>

<?php
if (isset($_POST['kirim'])) {
//deklarasi variable
$jurusan = $_POST['jurusan'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$nomer = $_POST['nomor'];
$email = $_POST['email'];

class ppdb{

    public function daftar($jurusan,$nama,$jenis,$tempat,$tanggal,$nomer,$email){
        echo "<table style='border-spacing: 10px; text-align: left;'>";
        echo"<tr><td>Jurusan</td> <td>:</td> <td>".$jurusan."</td></tr>";
        echo"<tr><td>Nama Lengkap</td> <td>:</td> <td>".$nama."</td></tr>";
        echo"<tr><td>Jenis Kelamin</td> <td>:</td> <td>".$jenis."</td></tr>";
        echo"<tr><td>Tempat Lahir</td> <td>:</td> <td>".$tempat."</td></tr>";
        echo"<tr><td>Tanggal Lahir</td> <td>:</td> <td>".$tanggal."</td></tr>";
        echo"<tr><td>Nomer telepon</td> <td>:</td> <td>".$nomer."</td></tr>";
        echo"<tr><td>Email</td> <td>:</td> <td>".$email."</td></tr>";
        echo"</table>";
    } 
  }

  $cetak = new ppdb();    
  echo $cetak->daftar($jurusan,$nama,$jenis,$tempat,$tanggal,$nomer,$email);
 
}