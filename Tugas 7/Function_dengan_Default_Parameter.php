<?php
    //Membuat fungsi/Function dengan Parameter
    function perkenalan($salam, $nama){
        echo $salam." <br>";
        echo "Selamat datang di my channel ".$nama."<br>";
        echo "Jangan lupa like, coment, dan subscribe ya...<br>";
        echo "<hr>";
    }
     //Memanggil fungsi dengan parameter
    perkenalan("Assalamu'alaikum", "Eira Channel");

    $salam = "Selamat Pagi";
    $nama = "Eira Channel";
    perkenalan($salam, $nama);
?>