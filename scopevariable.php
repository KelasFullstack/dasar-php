<?php

    // Global = Variabel yang dibuat diluar fungsi, yang hanya bisa dipakai diluar fungsi
    // Lokal = variabel yang dibuat didalam fungsi, hanya bisa dipakai dialam fungsi itu saja

    // $nama = "Fakhri";

    // function halo() {
    //     global $nama; //ambil variabel global
    //     echo "Halo $nama, apa kabarmu hari ini?";
    // }

    function halo($nama) {
        $alamat = "Bandung";
        echo "Halo-Halo $alamat dari $nama";
    }

    halo("Aditya");

    // echo $alamat;

?> 