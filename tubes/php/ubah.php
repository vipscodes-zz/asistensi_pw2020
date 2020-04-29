<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';
$id = $_GET['id'];
$mhs = query("SELECT * FROM mahasiswa2 WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
            alert('Data berhasil diubah');
            document.location.href = 'admin.php';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal diubah');
            document.location.href = 'admin.php';
        </script>";
    }
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
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
        <table>
            <tr>
                <td>
                    <label for="nama">Nama</label>
                </td>
                <td>
                    <input type="text" name="nama" value="<?= $mhs['nama']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="gambar">Gambar</label>
                </td>
                <td>
                    <input type="text" name="gambar" value="<?= $mhs['gambar']; ?>">
                </td>
            </tr>
        </table>
        <button type="submit" name="ubah">Ubah Data</button>
    </form>
</body>

</html>