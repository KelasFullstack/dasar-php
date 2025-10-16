<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Form</title>
</head>
<body>
    <h2>Hasil Inputan Form Biodata</h2>
    <h3>Selamat Datang, <?php echo $_POST['nama']; ?></h3>
    <h4>Alamat kamu di <?php echo $_POST['alamat']; ?></h4>
</body>
</html>