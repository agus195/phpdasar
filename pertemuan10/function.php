<?php 
//konek ke database 
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows =[];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
} 

function tambah($data) {
	global $conn;
	$nama = htmlspecialchars($data["nama"]);
	$rilis = htmlspecialchars($data["rilis"]);
	$chipset = htmlspecialchars($data["chipset"]);
	$gpu = htmlspecialchars($data["gpu"]);
	$ram = htmlspecialchars($data["ram"]);
	$internal = htmlspecialchars($data["internal"]);
	$camera = htmlspecialchars($data["camera"]);
	$frontcam = htmlspecialchars($data["frontcam"]);
	$batre = htmlspecialchars($data["batre"]);
	$gambar = htmlspecialchars($data["gambar"]);

	$query = "INSERT INTO samsung
				VALUES
			('','$nama', '$rilis', '$chipset', '$gpu', '$ram', '$internal', '$camera', '$frontcam', '$batre', '$gambar')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}


function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM samsung WHERE id = $id");
	return mysqli_affected_rows($conn);
}



 ?>