<?php
    
    $warna = ['merah','biru','kuning','hitam','hijau','merah','biru','biru','kuning','hijau','merah','biru','biru','kuning'];

    echo "Saya mau cari warna hitam <br>";

    foreach($warna as $key => $value) {
        echo "Warna pada elemen array ke-$key adalah $value <br>";

        if($value == 'hitam') {
            echo "<br> Nah, warna hitam udah ketemu nih ada di indeks ke-$key";
            break;
        }
    }

?>