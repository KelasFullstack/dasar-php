<?php

    $mahasiswa = [
        [
            "nama" => "Aditya",
            "umur" => 24,
            "jurusan" => "Informatika"
        ],
        [
            "nama" => "Fakhri",
            "umur" => 25,
            "jurusan" => "Teknik Sipil"
        ],
        [
            "nama" => "Rian",
            "umur" => 26,
            "jurusan" => "Bisnis"
        ],
    ];

    echo $mahasiswa[2]["nama"];
    echo $mahasiswa[2]["umur"];
    echo $mahasiswa[2]["jurusan"];

?>