<?php

    $tujuan = "Surabaya";
    $harga = 300000;
    $diskon = 150000;

    if ($tujuan == "Surabaya" || $tujuan == "Malang") {
        $harga = $harga - $diskon;
    }

    echo "Harga tiket adalah " , $harga;

?>