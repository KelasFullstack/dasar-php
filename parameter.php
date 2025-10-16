<?php

    function gantiNama(&$nama, &$alamat) {
        $nama = "Aditya";
        $alamat = "Sukabumi";
    }

    $nama = "Fakhri";
    $alamat = "Bandung";
    gantiNama($nama, $alamat);

    echo $nama, $alamat;
    
?> 