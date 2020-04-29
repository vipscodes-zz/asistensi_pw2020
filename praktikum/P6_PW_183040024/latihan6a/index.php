<?php
	// menghubungkan dengan file php lainnya
	require 'php/functions.php';

	// melakukan query
	$mahasiswa = query("SELECT * FROM mahasiswa")			
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<?php foreach ($mahasiswa as $mhs) : ?>
			    <p class="nama">
			    	<a href="php/detail.php?id=<?= $mhs['id'] ?>">
			    		<?= $mhs["nama"] ?>
			    	</a>
			    </p>
		<?php endforeach; ?>
	</div>
</body>
</html>