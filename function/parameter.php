<?php

echo"<p>fungsi dengan parameter</p>";
// membuat fungsi
function bebas($nama , $salam){
    echo"$salam<br>";
    echo"perkenalkan namasaya $nama<br>";
    echo"senang berkenalan dengan anda<br>";
}

// memanggil fungsi yang sudah di buat
bebas("muhardian","assalamualaikum");

echo"<hr>";

$saya ="indry";
$ucapsalam="selamat Pagi";
// memanggilnya lagi
bebas($saya, $ucapsalam);


?>