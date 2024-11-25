<?php
$mhs=[
    [
        "nama" =>"cahya",
        "jurusan" =>"RPL",
        "alamat" =>"bandung",
    ],
    [
        "nama" =>"abdul",
        "jurusan" =>"TKR",
        "alamat" =>"Jakarata",
    ],
];

foreach ($mhs as $data) {
    echo"Nama :". $data['nama'] ."<br>";
    echo"Jurusan :". $data['jurusan'] ."<br>";
    echo"Alamat:". $data['alamat'] ."<br>";
    echo"<hr>"; 
}
//array assosiatif yang harus ditampilkan adalah si key nya
//contoh:"nama" adalah key nya dan, => "cahya",adalah value nya atau isinya
?>
