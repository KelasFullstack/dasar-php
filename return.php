<?php

    $alas = 10;
    $tinggi = 5;

    function luasSegitiga($alas, $tinggi) {
        $luas = $alas * $tinggi / 2;
        return $luas;
    }

    echo "Luas segitiga adalah..." . luasSegitiga($alas, $tinggi);

?> 