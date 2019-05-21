<?php
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
</head>
<body>
	<h1>Tambah Data Mahasiswa</h1>

	<form action="" method="POST">
		<ul>
			<li>
				<label for="type">Type :</label>
				<input type="text" name="type" id="type" required>
			</li>
			<li>
				<label for="warna">Warna :</label>
				<input type="text" name="warna" id="warna" required>
			</li>
			<li>
				<label for="merek">Merek :</label>
				<input type="text" name="merek" id="merek" required>
			</li>
			<li>
				<label for="ukuran">Ukuran :</label>
				<input type="text" name="ukuran" id="ukuran" required>
			</li>
			<li>
				<label for="gender">Gender :</label>
				<input type="text" name="gender" id="gender" required>
			</li>
			<li>
				<label for="stok">Stok :</label>
				<input type="text" name="stok" id="stok" required>
			</li>
			<li>
				<label for="gambar">Gambar :</label>
				<input type="text" name="gambar" id="gambar" required>
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>
	</form>

</body>
</html>