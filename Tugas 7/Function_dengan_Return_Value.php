<?php
    //Membuat fungsi yang Mengembalikan Nilai
    function hitungumur($tgl_lahir){
        $umur = date('Y')-$tgl_lahir;
        return $umur;
    }

    //Memanggil Fungsi dengan Return
    echo "Umur saya adalah ".hitungumur(2000);
?>