<?php  
    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="nama" placeholder="nama">
        <input type="text" name="alamat" placeholder="alamat">
        <input type="submit">
    </form>

    <br>

    <h1>Selamat Datang, <?php echo $nama; ?>!</h1>
    <h2>Alamatnya di <?php echo $alamat  ?></h2>
    <p>Kita akan belajar dasar PHP</p>
</body>
</html>