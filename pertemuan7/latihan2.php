<?php 
// cek apakah tidak ada di $_GET
if( !isset($_GET["nama"]) ||
	!isset($_GET["rilis"]) ||
	!isset($_GET["chipset"]) ||
	!isset($_GET["gpu"]) ||
	!isset($_GET["ram"]) ||
	!isset($_GET["internal"]) ||
	!isset($_GET["camera"]) ||
	!isset($_GET["frontcam"]) ||
	!isset($_GET["gambar"]) ||
	!isset($_GET["batre"])) {

	// redirect
	header("Location: latihan1.php");
	exit;
}	
?>


<!DOCTYPE html>
<html>
<head>
	<title>Detail HP Samsung</title>
</head>
<body>

<h3><?= $_GET["nama"]; ?></h3>
<img src="img/<?= $_GET["gambar"]; ?>">
<ul>
	<li><?= $_GET["rilis"]; ?></li>
	<li><?= $_GET["chipset"]; ?></li>
	<li><?= $_GET["gpu"]; ?></li>
	<li><?= $_GET["ram"]; ?></li>
	<li><?= $_GET["internal"]; ?></li>
	<li><?= $_GET["camera"]; ?></li>
	<li><?= $_GET["frontcam"]; ?></li>
	<li><?= $_GET["batre"]; ?></li>
</ul>

<a href="latihan1.php">Kembali ke halaman Daftar HP Samsung</a>


</body>
</html>