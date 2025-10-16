<?php
    
    $kumpulanwarna = ['merah','biru','kuning','hijau','merah','biru','biru','kuning','hijau','merah','biru','biru','kuning'];

    $jumlah_merah = 0;
    
    foreach($kumpulanwarna as $warna) {
        if($warna == 'merah') {
            $jumlah_merah++;
        }
        echo "Warna saat ini adalah $warna <br>";
    }

    echo "Jumlah warna merah adalah $jumlah_merah";

?>