<?php
    // $i = 1;
    // while($i <= 20) {
    //     echo "Nomor antrian ke-$i <br>";
    //     $i++;
    // }
    $warna = ['merah','biru','kuning'];
    
    $jumlah = 0;
    $i = 0;
    
    do {
        if ($warna[$i] == 'merah') {
            $jumlah++;
        }
        $i++;
    } while ($i < count($warna));

    echo "Jumlah warna merah adalah $jumlah";

?>