<?php
require 'functions.php';

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $mahasiswa = query("SELECT * FROM mahasiswa2 WHERE
        nama LIKE '%$keyword%' OR
        gambar LIKE '%$keyword%'
    ");
} else {
    $mahasiswa = query("SELECT * FROM mahasiswa2");
}

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
    <form action="" method="get">
        <input type="text" name="keyword">
        <button type="submit" name="cari">Cari</button>
    </form>
    <table border="1">
        <tr>
            <th>#</th>
            <th>Opsi</th>
            <th>Nama</th>
            <th>Gambar</th>
        </tr>
        <?php if (empty($mahasiswa)) : ?>
            <tr>
                <td colspan="4">
                    <h1>Data tidak ditemukan</h1>
                </td>
            </tr>
        <?php else : ?>
            <?php $i = 1; ?>
            <?php foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $mhs['id']; ?>">Ubah</a>
                        <a href="hapus.php?id=<?= $mhs['id']; ?>" onclick="return confirm('Yakin mau dihapus?')">Hapus</a>
                    </td>
                    <td><?= $mhs['nama']; ?></td>
                    <td><img src="../assets/img/<?= $mhs['gambar']; ?>" alt=""></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</body>

</html>