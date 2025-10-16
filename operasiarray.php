<?php

    $buah = ["Apel","Jeruk","Semangka", "Tomat"];
    $sayur = ["Timun","Wortel","Kol", "Tomat"];

    $tanaman = array_merge($buah, $sayur);
    $tanaman2 = array_unique($tanaman);
    $tanaman3 = array_diff($buah, $sayur);
    $tanaman4 = array_intersect($buah, $sayur);

    // array_push($buah, "Mangga");
    // array_pop($buah); //hapus 
    // array_pop($buah); //hapus jeruk

    // echo implode(", ", $buah);
    // echo array_search("Semangka", $buah);

    echo implode(", ", $tanaman4);


?>