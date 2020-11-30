<?php
    //Membuat fungsi yang Mengembalikan Nilai
    function hitungumur($tgl_lahir){
        $umur = date('Y')-$tgl_lahir;
        return $umur;
    }
    function perkenalan($channel, $salam="Assalamu'alaikum") {
        echo $salam." <br>";
        echo "Selamat datang di channel ".$channel."<br>";
        //Memanggil fungsi lain
        echo "Sekarang youtuber berusia " .hitungumur(2000). " tahun<br>";
        echo "Nice to meet you :)";
    }
    
    //Memanggil fungsi perkenalan
    perkenalan("Eira Channel");
    
?>