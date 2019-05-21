<?php 
// koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query){
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data){
	global $koneksi;
	// ambil data dari tiap elemen dalam form
	$type = htmlspecialchars($data["type"]);
	$warna = htmlspecialchars($data["warna"]);
	$merek = htmlspecialchars($data["merek"]);
	$ukuran = htmlspecialchars($data["ukuran"]);
	$gender = htmlspecialchars($data["gender"]);
	$stok = htmlspecialchars($data["stok"]);
	$gambar = htmlspecialchars($data["gambar"]);

	// query insert data
	$query = "INSERT INTO jamtangan
				VALUES
				('', '$type', '$warna', '$merek', '$ukuran', '$gender', '$stok', '$gambar')";
	mysqli_query($koneksi, $query);
	return mysqli_affected_rows($koneksi);
}

function hapus($id){
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM jamtangan WHERE id = $id");

	return mysqli_affected_rows($koneksi);
}

?>