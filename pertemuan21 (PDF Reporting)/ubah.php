<?php
session_start();

if( !isset($_SESSION["login"] )){
	header("Location: login.php");
	exit;
}

require "functions.php";

// ambil data di URL
$id = $_GET["id"];

// query data jamtangan berdasarkan id
$jam = query("SELECT * FROM jamtangan WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){
	// cek apakah data berhasil ditambahkan atau tidak
	if (ubah($_POST) > 0) {
		echo "
			<script>
				alert('Data berhasil diubah!');
				document.location.href = 'index.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Data gagal diubah!');
				document.location.href = 'index.php';
			</script>
		";
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Mahasiswa</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">

	<br>

	<h1>Ubah Data Mahasiswa</h1>

	<form action="" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $jam["id"] ?>">
		<input type="hidden" name="gambarLama" value="<?php echo $jam["gambar"]; ?>">
		<div class="form-group">
			<label for="type">Type :</label>
			<input class="form-control" type="text" name="type" id="type" value="<?php echo $jam["type"] ?>">
		</div>
		<div class="form-group">
			<label for="warna">Warna :</label>
			<input class="form-control" type="text" name="warna" id="warna" value="<?php echo $jam["warna"] ?>">
		</div>
		<div class="form-group">
			<label for="merek">Merek :</label>
			<input class="form-control" type="text" name="merek" id="merek" value="<?php echo $jam["merek"] ?>">
		</div>
		<div class="form-group">
			<label for="ukuran">Ukuran :</label>
			<input class="form-control" type="text" name="ukuran" id="ukuran" value="<?php echo $jam["ukuran"] ?>">
		</div>
		<div class="form-group">
			<label for="gender">Gender :</label>
			<input class="form-control" type="text" name="gender" id="gender" value="<?php echo $jam["gender"] ?>">
		</div>
		<div class="form-group">
			<label for="stok">Stok :</label>
			<input class="form-control" type="text" name="stok" id="stok" value="<?php echo $jam["stok"] ?>">
		</div>
		<div class="form-group">
			<label for="gambar">Gambar :</label>
			<img src="img/<?php echo $jam["gambar"] ?>" width="100"><br>
			<input class="form-control-file" type="file" name="gambar" id="gambar">
		</div>
		<a class="btn btn-danger" href="index.php">Batal</a> | 
		<button class="btn btn-warning" type="submit" name="submit">Ubah Data!</button>
	</form>

	<br>

	</div>

<script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>