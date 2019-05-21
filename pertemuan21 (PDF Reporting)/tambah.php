<?php
session_start();

if( !isset($_SESSION["login"] )){
	header("Location: login.php");
	exit;
}

require "functions.php";
// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){
	// cek apakah data berhasil ditambahkan atau tidak
	if (tambah($_POST) > 0) {
		echo "
			<script>
				alert('Data berhasil ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Data gagal ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mahasiswa</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">

	<br>

	<h1>Tambah Data Mahasiswa</h1>

	<form action="" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="type">Type :</label>
			<input class="form-control" class="form-control" type="text" name="type" id="type" required>
		</div>
		<div class="form-group">
			<label for="warna">Warna :</label>
			<input class="form-control" type="text" name="warna" id="warna" required>
		</div>
		<div class="form-group">
			<label for="merek">Merek :</label>
			<input class="form-control" type="text" name="merek" id="merek" required>
		</div>
		<div class="form-group">
			<label for="ukuran">Ukuran :</label>
			<input class="form-control" type="text" name="ukuran" id="ukuran" required>
		</div>
		<div class="form-group">
			<label for="gender">Gender :</label>
			<input class="form-control" type="text" name="gender" id="gender" required>
		</div>
		<div class="form-group">
			<label for="stok">Stok :</label>
			<input class="form-control" type="text" name="stok" id="stok" required>
		</div>
		<div class="form-group">
			<label for="gambar">Gambar :</label>
			<input class="form-control-file" type="file" name="gambar" id="gambar">
		</div>
		<a class="btn btn-danger" href="index.php">Batal</a> | 
		<button class="btn btn-success" type="submit" name="submit">Tambah Data!</button>
	</form>

	<br>

	</div>

<script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>