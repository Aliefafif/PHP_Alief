<?php
//array 1 dimensi
$arrbuah= ["mangga","apel","jeruk","pisang"];

//bisa di tampilkan satuan berdasarkan index (key) nya
echo $arrbuah[2];
echo"<br>";

//bisa ditampilkan semua (collective)
for( $i = 0; $i < count($arrbuah); $i++ ){
 echo" $arrbuah[$i]<hr>"; 
}

// echo" foreach<br>";
// foreach($arrbuah as $key => $val){ 
//     echo"$key - $val<br>";
// }