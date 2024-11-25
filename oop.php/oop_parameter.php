<?php

class pendaftaran{

    public function datadiri($jurusan,$nama,$jenis_kelamin,$tempatlahir,$tanggallahir,$nomorhp,$email){

        echo"jurusan : " .$jurusan. "<br>";
        echo"Nama Lengkap : " .$nama. "<br>";
        echo"Jenis Kelamin : " .$jenis_kelamin. "<br>";
        echo"Tempat lahir : " .$tempatlahir. "<br>";
        echo"tanggal lahir : " .$tanggallahir. "<br>";
        echo"nomor hp : " .$nomorhp. "<br>";
        echo"email : " .$email;
    }

    public function alamat($provinsi,$kab,$kecamatan,$desa,$alamat,$kodepos){

        echo"provinsi       : " .$provinsi. "<br>";
        echo"kab/kota       : " .$kab. "<br>";
        echo"kecamatan      : " .$kecamatan. "<br>";
        echo"Desa/Kelurahan : " .$desa. "<br>";
        echo"Alamat         : " .$alamat. "<br>";
        echo"Kode Pos       : " .$kodepos;
    }
    public function asalsekolah($asalsekolah,$alamatsekolah){

        echo"Nama Asal Sekolah : " .$asalsekolah. "<br>";
        echo"Alamat Sekolah    : " .$alamatsekolah. "<br>";
    }
    public function datarotu($namalengkaportu,$pekerjaanortu,$nohp,$almt){

        echo"Nama Lengkap Ayah/Ibu/Wali   : " .$namalengkaportu. "<br>";
        echo"PEkerjaan Ayah/Ibu/Wali      : " .$pekerjaanortu. "<br>";
        echo"Nomor Hp Yang Bisa Dihubungi : " .$nohp. "<br>";
        echo"Alamat Lengkap               : " .$almt. "<br>";
    }
}

$cetak = new pendaftaran();
echo"<h3>Data Diri</h3><br>";
echo $cetak->datadiri("RPl","Suripto","Laki-Laki","Ngawi","13-10-2007","082983763","spur@gmail.com");
echo"<hr>";

echo"<h3>Alamat Calon Pendaftar</h3><br>";
echo $cetak->alamat("Jawa Barat","Bandung","Baleendah","Bojongmalaka","Bojong Malaka Indah","42746");
echo"<hr>";

echo"<h3>Alamat Calon Pendaftar</h3><br>";
echo $cetak->asalsekolah("Kalam Kudus","Cibaduyut");
echo"<hr>";

echo"<h3> Data Orang tua</h3><br>";
echo $cetak->datarotu("Yudi","Pemain Bola","089468364","Bojong Malaka Indah");
?>