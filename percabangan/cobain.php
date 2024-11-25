<?php
$buku ="komik";
$harga ="100000";
$genre ="comady";
$cashback ="0;";

switch ($genre){
    case "romance":
        $cashback = $harga * 0.05;
        break;
    case "thriller":
        $cashback = $harga * 0.1;
        break;
    case "comady":
        $cashback = $harga * 0.15;
            break;
            default:
            $cashback =0;            
}
echo"judul buku : $buku<br>";
echo"Genre : $genre<br>";
echo"Harga: Rp.". number_format($harga, 0, '.','.')."<br>";
echo"judul buku : Rp." . number_format($cashback, 0, '.','.');