<?php
        if(isset($_POST['nama'])) {
            if(empty($_POST['nama'])) {
                echo "Nama Wajib Diisi!";
            } else {
                echo "Halo!" . $_POST['nama'];
            }
        }
?>