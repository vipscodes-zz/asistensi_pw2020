<?php
	// Melakukan koneksi ke database
	$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");

	// Memilih database
	mysqli_select_db($conn, "pw_183040024") or die("Database salah!");

	//query mengambil objek dari tabel didalam database
	$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
				
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="container">
    	<table cellpadding="10" cellspacing="0" border="1">
		    <tr>
		      <th>NO</th>
		      <th>Foto</th>
		      <th>NRP</th>
		      <th>Nama</th>
		      <th>Email</th>
		      <th>Jurusan</th>
		    </tr>
		    <?php $i = 1 ?>
		    <?php while($row = mysqli_fetch_assoc($result)) : ?>
			    <tr>
			      <td><?= $i ?></td>
			      <td><img src="assets/img/<?= $row["img"]; ?>"></td>
			      <td><?= $row["nrp"] ?></td>
			      <td><?= $row["nama"] ?></td>
			      <td><?= $row["email"]?></td>
			      <td><?= $row["jurusan"]?></td>
			    </tr>
		    <?php $i++ ?>
		    <?php endwhile; ?>

		</table>
	</div>
</body>
</html>