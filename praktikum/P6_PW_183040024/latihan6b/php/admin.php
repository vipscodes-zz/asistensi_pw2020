<?php
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa2");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="tambah.php">
        <button type="">Tambah Data</button>
    </a>
    <table border="1">
        <tr>
            <th>#</th>
            <th>Opsi</th>
            <th>Nama</th>
            <th>Gambar</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $i++ ?></td>
                <td>
                    <a href="">Ubah</a>
                    <a href="">Hapus</a>
                </td>
                <td><?= $mhs['nama']; ?></td>
                <td><img src="../assets/img/<?= $mhs['gambar']; ?>" alt=""></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>