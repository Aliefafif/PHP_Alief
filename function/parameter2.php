<?php
function datadiri($jurusan,$namalengkap,$jeniskelamin,$tempatlahir,$tanggallahir,$nohp,$email){
    echo"Jurusan       :$jurusan<br>";
    echo"Nama Lengkap  :$namalengkap<br>";
    echo"Jenis Kelamin :$jeniskelamin<br>";
    echo"Tempat lahir  :$tempatlahir<br>";
    echo"Tangggal lahir:$tanggallahir<br>";
    echo"No handphone  :$nohp<br>";
    echo"Email         :$email<br>";
}
function alamat($Provinsi,$kabkota,$kecamatan,$desa,$alamat,$kodepos){
    echo"Provinsi      :$Provinsi<br>";
    echo"Kab/KOta      :$kabkota<br>";
    echo"Kecamatan     :$kecamatan<br>";
    echo"Desa          :$desa<br>";
    echo"Alamat        :$alamat<br>";
    echo"Kode Pos      :$kodepos<br>";
}
function asalsekolah($namaasal,$alamatasal){
    echo"Nama Asal Sekolah   :$namaasal<br>";
    echo"Alamat Asal Sekolah :$alamatasal";
}
function dataorangtua($namawali,$pekerjaanortu,$nohpbisa,$alamatlng){
    echo"Nama lengkap Orang tua  :$namawali<br>";
    echo"pekerjaan Orang Tua :$pekerjaanortu<br>";
    echo"Nomer Hp Yang Bisa Di Hubungi :$nohpbisa<br>";
    echo"Alamat Lengkap :$alamatlng<br>";
}

echo"<h3>Data Diri</h3>";
datadiri("RPL","Jamrud","Laki-Laki","Bandung","13 juni 2009","098735678168","jmbt@gmail.com");
echo"<hr>";

echo"<h3>Alamat Pendaftar</h3>";
alamat("Jawa Barat","bandung","baleendah","bojongmalaka","BMI Blok H3 No 45","453356");
echo"<hr>";

echo"<h3>Data Asal Sekolah</h3>";
asalsekolah("Smp Baleendah 3","rancamanyar");
echo"<hr>";

echo"<h3>Data Asal Sekolah</h3>";
dataorangtua("Achenk","Presiden","0973578688","Ngawi");
echo"<hr>";
?>