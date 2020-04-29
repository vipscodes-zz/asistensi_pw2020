<?php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];
$mahasiswa = query("SELECT * FROM mahasiswa2 WHERE id = $id")[0];
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><img src="../assets/img/<?= $mahasiswa['gambar'] ?>" alt=""></p>
    <p>Nama : <?= $mahasiswa['nama'] ?></p>

</body>

</html>