<?php

//class nya manusia
class manusia {

    //property
    public $tampil ="rssd" ;


    protected function nama(){
        echo"perkenalkan nama saya asep";
    }
    //method manusia
    //   public function tampillkan_nama(){
    //     return"". $this->nama;
    //}

    //method manusia
    public function tampillkan_nama(){
        echo $this->nama();

    }
}
//instansaiasi class manusia
$jelma = new manusia();
echo $jelma->tampillkan_nama();
echo"<br>";
echo $jelma->tampil;