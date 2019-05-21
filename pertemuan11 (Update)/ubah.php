<?php
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
</head>
<body>
	<h1>Ubah Data Mahasiswa</h1>

	<form action="" method="POST">
		<input type="hidden" name="id" value="<?php echo $jam["id"] ?>">
		<ul>
			<li>
				<label for="type">Type :</label>
				<input type="text" name="type" id="type" required value="<?php echo $jam["type"] ?>">
			</li>
			<li>
				<label for="warna">Warna :</label>
				<input type="text" name="warna" id="warna" required value="<?php echo $jam["warna"] ?>">
			</li>
			<li>
				<label for="merek">Merek :</label>
				<input type="text" name="merek" id="merek" required value="<?php echo $jam["merek"] ?>">
			</li>
			<li>
				<label for="ukuran">Ukuran :</label>
				<input type="text" name="ukuran" id="ukuran" required value="<?php echo $jam["ukuran"] ?>">
			</li>
			<li>
				<label for="gender">Gender :</label>
				<input type="text" name="gender" id="gender" required value="<?php echo $jam["gender"] ?>">
			</li>
			<li>
				<label for="stok">Stok :</label>
				<input type="text" name="stok" id="stok" required value="<?php echo $jam["stok"] ?>">
			</li>
			<li>
				<label for="gambar">Gambar :</label>
				<input type="text" name="gambar" id="gambar" required value="<?php echo $jam["gambar"] ?>">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>
	</form>

</body>
</html>