<?php
$data=["dwi" => 90,"yanto" => 75,"asep" => 65,"dudung" => 85,];
//menambah index pada array
$data["Ahmad"]= 88;
foreach ($data as $key => $val) {
    echo"Nama:$key<br>";
    echo"Nilai :$val<br>";
//menambahkan keterangan
$ket = $val >= 75 ? "Tuntas" :"Tidak Tuntas";
echo"keterangan : $ket<hr>";
} 