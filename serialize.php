<?php

    $mahasiswa = [
        ['nama' => 'Aditya Fakhri', 'prodi' => 'Informatika'],
        ['nama' => 'Kevin', 'prodi' => 'Kedokteran'],
        ['nama' => 'Beckham', 'prodi' => 'DKV'],
        ['nama' => 'Ole Romeny', 'prodi' => 'PGSD'],
    ];

    // $data = serialize($mahasiswa);
    // file_put_contents("data.txt", $data);

    // $output = file_get_contents("data.txt");
    // $hasil = unserialize($output);

    // print_r($hasil);

    $data = json_encode($mahasiswa);
    file_put_contents("data.txt", $data);

    $output = file_get_contents("data.txt");
    $hasil = json_decode($output);

    print_r($hasil);

?>