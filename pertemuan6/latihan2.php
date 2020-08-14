<?php 
// $mahasiswa = [
// 	["Agus Saepulloh", "1144020007", "agussaepulloh195@gmail.com", "Komunikasi dan Penyiaran Islam"],
// 	["Abdullah", "1144020002", "adul@gmail.com", "Komunikasi dan Penyiaran Islam"]
// ];

// array Associative
// definisinya sama seperti array numerik, kecual
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
	[
		"nama" => "Agus Saepulloh", 
		"nik" => "1144020007",
		"email" => "agussaepulloh195@gmail.com",
		"jurusan" => "Komunikasi dan Penyiaran Islam",
		"gambar" => "agus.jpg"
	],
	[
		"nama" => "Abdullah", 
		"nik" => "1144020002",
		"email" => "abdullah@gmail.com",
		"jurusan" => "Komunikasi dan Penyiaran Islam",
		"gambar" => "adul.jpg"
	]
];


?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach( $mahasiswa as $mhs) : ?>
		<ul>
			<li>
				<img src="img/<?= $mhs["gambar"]; ?>">
			</li>
			<li>Nama : <?= $mhs["nama"]; ?></li>
			<li>NIK : <?= $mhs["nik"]; ?></li>
			<li>Email : <?= $mhs["email"]; ?></li>
			<li>Jurusan : <?= $mhs["jurusan"]; ?></li>
		</ul>
	<?php endforeach; ?>
</body>
</html>



 