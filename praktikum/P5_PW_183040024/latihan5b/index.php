<?php
require 'php/functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

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
				<th>NRP</th>
				<th>Nama</th>
			</tr>
			<?php $i = 1 ?>
			<?php foreach ($mahasiswa as $mhs) : ?>
				<tr>
					<td><?= $i ?></td>
					<td><?= $mhs["nrp"] ?></td>
					<td><?= $mhs["nama"] ?></td>
				</tr>
				<?php $i++ ?>
			<?php endforeach; ?>

		</table>
	</div>
</body>

</html>