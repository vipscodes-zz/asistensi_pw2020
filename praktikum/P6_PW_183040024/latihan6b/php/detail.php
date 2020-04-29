<?php

	// Mengecek apakah ada id yang dikirimkan 
    // jika tidak maka akan dikembalikan ke halaman index.php
	if (!isset($_GET['id'])) {
		header("location: ../index.php");
		exit;
	}  
	
	require 'functions.php';

	// Mengambil id dari url
	$id = $_GET['id'];

	// melakukan query dengan parameter id yang diambil dari url
	$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<div class="gambar">
			<img src="../assets/img/<?= $mhs["img"]; ?>" alt="">
		</div>
		<div class="keterangan">
			<p><?= $mhs["nrp"]; ?></p>
			<p><?= $mhs["nama"]; ?></p>
			<p><?= $mhs["email"]; ?></p>
			<p><?= $mhs["jurusan"]; ?></p>
		</div>

		<button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
	</div>
</body>
</html>