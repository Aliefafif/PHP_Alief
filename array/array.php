 <?php
 //array
 // variabel yang dapat memiliki banyak nilai
 //elemen pada array boleh memiliki tipe data yang berbeda
 //pasangan antara key dan value
 //key-nya adalah index,yang di mulai dari 0 [ini adalah index]

 //membuat array
 //cara lama
 $hari =array("senin","selasa","rabu");
//cara baru
 $bulan =["januari","maret","september"];
 $apa =[123,"baju",true];

 //menampilkan array
 // var_dump() / print_r()
//  var_dump($hari);
//  echo"<br>";
// print_r($bulan);
// echo"<br>";

//menampilkan 1 elemen pada array dng menambahkan indexnya
//elemen 1 dimulai dari angka 0
// echo $apa [1];

//menambahkan elemen baru pada array
var_dump($apa);
$hari[] = "kamis";
$hari[] = "jum'at";
echo"<br>";
print_r($hari);
?>