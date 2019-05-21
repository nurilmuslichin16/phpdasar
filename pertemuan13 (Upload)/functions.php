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
	
	// upload gambar
	$gambar = upload();
	if(!$gambar){
		return false;
	}

	// query insert data
	$query = "INSERT INTO jamtangan
				VALUES
				('', '$type', '$warna', '$merek', '$ukuran', '$gender', '$stok', '$gambar')";
	mysqli_query($koneksi, $query);
	return mysqli_affected_rows($koneksi);
}

function upload(){
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada gambar yang diupload
	if( $error === 4 ){
		echo "<script> 
				alert('Pilih gambar terlebih dahulu');
			</script>";
		return false;
	}

	// cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
		echo "<script> 
				alert('Yang anda upload bukan gambar!');
			</script>";
		return false;
	}

	// cek jika ukurannya terlalu besar
	if( $ukuranFile > 1000000 ){
		echo "<script> 
				alert('Ukuran gambar terlalu besar!');
			</script>";
		return false;
	}

	// lolos pengecekan, gambar siap diupload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.' ;
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'img/'. $namaFileBaru);

	return $namaFileBaru;
}

function hapus($id){
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM jamtangan WHERE id = $id");

	return mysqli_affected_rows($koneksi);
}

function ubah($data){
	global $koneksi;

	// ambil data dari tiap elemen dalam form
	$id = $data["id"];
	$type = htmlspecialchars($data["type"]);
	$warna = htmlspecialchars($data["warna"]);
	$merek = htmlspecialchars($data["merek"]);
	$ukuran = htmlspecialchars($data["ukuran"]);
	$gender = htmlspecialchars($data["gender"]);
	$stok = htmlspecialchars($data["stok"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]);

	// cek apakah user pilih gambar baru atau tidak
	if($_FILES["gambar"]["error"] === 4){
		$gambar = $gambarLama;
	}else{
		$gambar = upload();
	}

	// query insert data
	$query = "UPDATE jamtangan SET
				type = '$type',
				warna = '$warna',
				merek = '$merek',
				ukuran = '$ukuran',
				gender = '$gender',
				stok = '$stok',
				gambar = '$gambar'
			WHERE id = $id
			";
	mysqli_query($koneksi, $query);
	return mysqli_affected_rows($koneksi);
}

function cari($keyword){
	$query = "SELECT * FROM jamtangan
				WHERE 
				type LIKE '%$keyword%' OR
				warna LIKE '%$keyword%' OR
				merek LIKE '%$keyword%' OR
				ukuran LIKE '%$keyword%' OR
				gender LIKE '%$keyword%' OR
				stok LIKE '%$keyword%'
			";

	return query($query);
}

?>