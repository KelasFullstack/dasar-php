<?php
    $nilai = "A";

    switch($nilai) {
        case 'A':
            echo "Nilai anda sangat memuaskan";
            break;
        case 'B':
            echo "Nilai anda bagus";
            break;
        case 'C':
            echo "Nilai anda cukup aja";
            break;
        default:
            echo "Nilai tidak terdapat di database";
            break;
    }
?>