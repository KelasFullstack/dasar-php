<?php

    $pesan = "Ini belajar di KelasFullstack";
    file_put_contents("namafile.txt",$pesan);


    $isi_file = file_get_contents("namafile.txt");

    echo $isi_file;

?>