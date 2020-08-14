<?php
 require 'function.php';
 $samsung = query("SELECT * FROM samsung");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar HP Samsung</title>
</head>
<body>

<h1>Daftar HP Samsung</h1>

<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>Nama</th>
		<th>Rilis</th>
		<th>CPU</th>
		<th>GPU</th>
		<th>RAM</th>
		<th>Memory Internal</th>
		<th>Kamera Belakang</th>
		<th>Kamera Depan</th>
		<th>Batery</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach( $samsung as $row ) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="">Ubah</a>
			<a href="">Hapus</a>
		</td>
		<td><img src="img/<?= $row["gambar"]; ?>" width="100"></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["rilis"]; ?></td>
		<td><?= $row["chipset"]; ?></td>
		<td><?= $row["gpu"]; ?></td>
		<td><?= $row["ram"]; ?></td>
		<td><?= $row["internal"]; ?></td>
		<td><?= $row["camera"]; ?></td>
		<td><?= $row["frontcam"]; ?></td>
		<td><?= $row["batre"]; ?></td>
	</tr>
	<?php $i++; ?>
<?php endforeach; ?>



</table>

</body>
</html>