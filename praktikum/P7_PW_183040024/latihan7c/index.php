<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

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
	<title>Document</title>
</head>

<body>
	<div class="container">
		<form action="" method="get">
			<input type="text" name="keyword">
			<button type="submit" name="cari">Cari</button>
		</form>
		<?php if (empty($mahasiswa)) : ?>
			<h1>Data tidak ditemukan</h1>
		<?php else : ?>
			<?php foreach ($mahasiswa as $mhs) : ?>
				<p class="nama">
					<a href="php/detail.php?id=<?= $mhs['id'] ?>">
						<?= $mhs["nama"] ?>
					</a>
				</p>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>

	<a href="php/login.php">
		<button type="">
			Masuk ke halaman Admin
		</button>
	</a>
</body>

</html>