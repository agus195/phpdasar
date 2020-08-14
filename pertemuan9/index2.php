<?php
 //konek ke database 
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
 // ambil data dari database/ query datanya
$result = mysqli_query($conn, "SELECT * FROM samsung");
// var_dump($result);
// ambil data (fetch)samsung dari object result
// mysqli_fetch_row()
// mysqli_fetch_assoc()
// mysqli_fetch_array()
// mysqli_fetch_object()

// while ($smg = mysqli_fetch_assoc($result) ) { 
// var_dump($smg);
// }
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
	<?php while( $row = mysqli_fetch_assoc($result) ) : ?>
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
<?php endwhile; ?>



</table>

</body>
</html>