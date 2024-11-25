<?php
$nilai=[
    ["rani","bandung","islam",167],
    ["roni","tasik","islam",178],
    ["dedeng","bandung","kristen",199],
];

//menampilkan nilai array secara individu
echo $nilai [1][2];
echo"<hr>";
//menampilkan array secara kolektif
for ($i=0; $i < count($nilai) ; $i++) { 
    for ($n=0; $n < count($nilai[$i]); $n++) { 
       echo $nilai[$i][$n] . "<br>";
    }
    echo"<hr>";
}

//menggunakan foreach
foreach ($nilai as $siswa){
    foreach ($siswa as $biodata) {
        echo $biodata ."";
    }
    echo"<br>";
}