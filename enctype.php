<?php  
    if(isset($_POST['upload'])) {
        // ambil informasi file $_FILES
        $nama_file = $_FILES['foto']['name'];
        $tmp_file = $_FILES['foto']['tmp_name'];
        
        $folder = "image/" . $nama_file;

        //kalau folder belum ada, bikin
        if(!is_dir('image')) {
            mkdir('image',0777, true);
        }

        move_uploaded_file($tmp_file, $folder);
        echo "Upload berhasil! file tersimpan di: " . $folder;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="nama" placeholder="nama">
        <input type="text" name="alamat" placeholder="alamat">

        <input type="file" name="foto">

        <button type="submit" name="upload">Upload</button>
    </form>
</body>
</html>