<?php
    $mahasiswa = [
        ['nama' => 'Aditya', 'alamat' => 'Cimahi', 'prodi' => 'informatika'],
        ['nama' => 'Fakhri', 'alamat' => 'Jakarta', 'prodi' => 'DKV'],
        ['nama' => 'Riansyah', 'alamat' => 'Bandung', 'prodi' => 'Akuntansi'],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data mahasiswa</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <table border="1" cellpadding="8">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Prodi</th>
        </tr>
        <?php foreach ($mahasiswa as $value): ?>
        <tr>
            <td><?php echo $value['nama'] ?></td>
            <td><?php echo $value['alamat'] ?></td>
            <td><?php echo $value['prodi'] ?></td>
        </tr>
        <?php endforeach;  ?>
    </table>
</body>
</html>