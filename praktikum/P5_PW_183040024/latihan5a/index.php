<?php
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "pw_1830400");
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
				<th>NRP</th>
				<th>Nama</th>
			</tr>
			<?php $i = 1 ?>
			<?php while ($row = mysqli_fetch_assoc($result)) : ?>
				<tr>
					<td><?= $i ?></td>
					<td><?= $row["nrp"] ?></td>
					<td><?= $row["nama"] ?></td>
				</tr>
				<?php $i++ ?>
			<?php endwhile; ?>

		</table>
	</div>
</body>

</html>