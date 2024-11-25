<?php

$tipe_akun ="User";
$aksi="Hapus"; 

switch($tipe_akun){

    //Admin
    case 'Admin':
        echo"Tipe Akun : $tipe_akun <br>";
        echo"Aksi :";
    switch($aksi){
        case 'Edit':
            echo"Edit akun Admin";
            break;
            case 'Hapus':
                echo"Hapus akun Admin";
                break;

                //User
    } break;
    case 'User':
        echo"Tipe Akun : $tipe_akun <br>";
        echo"Aksi :";
        switch($aksi){
            case 'Edit':
                echo"Edit akun User";
                break;
                case 'Hapus':
                    echo"Anda Tidak Bisa Menghapus Akun User";
                }break;
                    default;
                    echo"Akun Ini Tidak Di Temukan";
            }

?>