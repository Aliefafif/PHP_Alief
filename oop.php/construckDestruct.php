<?php

//class nya manusia
class manusia {

    //property

    //method construct di jalankan pertama kali
    public function __construct(){
        echo"ini adalah isi method construct <br> ";

    }

    //method destruct di jalankan terakhir
    public function __destruct(){
    echo"ini adalah isi method destruct <br>";
    }

    //method manusia
    public function tampillkan_nama(){
        return"nama saya adalah aji<br>";
    }
}

//instansaiasi class manusia
$jelma = new manusia();

//memanggil method tampilkan_nama dari class manusia
    echo $jelma->tampillkan_nama();