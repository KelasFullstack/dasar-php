<?php
    
    $warna = ['merah','biru','kuning','hitam','hijau','merah','biru','biru','kuning','hijau','merah','biru','hitam','biru','kuning'];

    foreach($warna as $key => $value) {
        
        if($value == 'hitam') {
            continue;
        }

        echo "Warna pada elemen array ke-$key adalah $value <br>";
    }

?>