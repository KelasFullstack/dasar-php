<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi Form</title>
</head>
<body>
    <form method="POST" >
        <input type="text" name="nama" placeholder="nama">
        <input type="text" name="alamat" placeholder="alamat">
        <input type="submit">
    </form>
    
    <?php
        if(isset($_POST['nama'])) {
            if(empty($_POST['nama']) || empty($_POST['alamat'])) {
                echo "Nama atau alamat Wajib Diisi!";
            } else {
                echo "Halo! " . $_POST['nama'];
            }
        }
    ?>
    
</body>
</html>