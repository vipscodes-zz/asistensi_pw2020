<?php
require 'php/functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa2");

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<body>
	<div class="container">

		<?php $i = 1 ?>
		<?php foreach ($mahasiswa as $mhs) : ?>
			<p>
				<a href="php/detail.php?id=<?= $mhs["id"] ?>">
					<?= $mhs["nama"] ?>
				</a>
			</p>
			<?php $i++ ?>
		<?php endforeach; ?>

	</div>
</body>

</html>