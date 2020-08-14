<?php
require 'function.php';
// cek button
if( isset($_POST["submit"]) ) {
	// cek data berhasil atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	}

 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Baru</title>
</head>
<body>
	<h1>Tambah data baru</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="nama">Nama: </label>
				<input type="text" name="nama" id="nama" required>
			</li>
			<li>
				<label for="rilis">Rilis: </label>
				<input type="text" name="rilis" id="rilis" required>
			</li>
			<li>
				<label for="chipset">Chipset: </label>
				<input type="text" name="chipset" id="chipset" required>
			</li>
			<li>
				<label for="gpu">GPU: </label>
				<input type="text" name="gpu" id="gpu" required>
			</li>
			<li>
				<label for="ram">RAM: </label>
				<input type="text" name="ram" id="ram" required>
			</li>
			<li>
				<label for="internal">Internal: </label>
				<input type="text" name="internal" id="internal" required>
			</li>
			<li>
				<label for="camera">Kamera Belakang: </label>
				<input type="text" name="camera" id="camera" required>
			</li>
			<li>
				<label for="frontcam">Kamera Depang: </label>
				<input type="text" name="frontcam" id="frontcam" required>
			</li>
			<li>
				<label for="batre">Bateri: </label>
				<input type="text" name="batre" id="batre" required>
			</li>
			<li>
				<label for="gambar">Gambar: </label>
				<input type="text" name="gambar" id="gambar" required>
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data</button>
			</li>			
		</ul>
	</form>
</body>
</html>