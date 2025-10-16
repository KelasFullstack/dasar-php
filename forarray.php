<?php

    $warna = ['merah','biru','kuning','hijau','merah','biru','biru','kuning','hijau','merah','biru','biru','kuning','hijau','merah','biru','biru','kuning','hijau','merah','biru','biru','kuning','hijau','merah','biru','biru','kuning','hijau','merah','biru','biru','kuning','hijau','merah','biru','biru','kuning','hijau','merah','biru','biru','kuning','hijau','merah','biru','biru','kuning','hijau','merah','biru','biru','kuning','hijau','merah','biru','biru','kuning','hijau','merah','biru','biru','kuning','hijau','merah','biru','biru','kuning','hijau','merah','biru','biru','kuning','hijau','merah','biru','biru','kuning','hijau','merah','biru','biru','kuning','hijau','merah','biru','biru','kuning','hijau','merah','biru','biru','kuning','hijau','merah','biru','biru','kuning','hijau','merah','biru','biru','kuning','hijau','merah','biru','biru','kuning','hijau','merah','biru'];
    $jumlah = 0;

    for($i = 0; $i < count($warna); $i++) {
        if ($warna[$i] == 'biru') {
            $jumlah++;
        }
    }

    echo "Jumlah warna biru adalah $jumlah";
?>