<?php

class manusia{

    public $warna;
    public $jenis = "pria" ;

    public function makan(){
        echo "dio suka makan nasi";
    }
    public function data(){
        echo "dio seorang $this->jenis";
    }
}

$cetak = new manusia();
echo $cetak->makan();
echo"<br>";
echo $cetak->data();
?>